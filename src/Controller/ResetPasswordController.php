<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\NotificacionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * Display & process form to request a password reset.
     * @param Request $request
     * @param MailerInterface $mailer
     * @param TranslatorInterface $translator
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    #[Route('', name: 'app_forgot_password_request')]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator, NotificacionRepository $notificacionRepository): Response
    {
        $user = $this->getUser();
        if($user === null){
            $id = 0;
            $totalNotificacionesUser = 0;
        }else{
            $id = $user->getId();
            $totalNotificacionesUser = count($notificacionRepository->findBy(array('user' => $user,'tipo'=> array('4', '5','7','8','9','10','11','12'))));
        }

        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->processSendingPasswordResetEmail(
                $form->get('email')->getData(),
                $mailer,
                $translator
            );
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado'=>false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => $totalNotificacionesUser,
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
        ]);
    }

    /**
     * Confirmation page after a user has requested a password reset.
     */
    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(): Response
    {
        // Generate a fake token if the user does not exist or someone hit this page directly.
        // This prevents exposing whether or not a user was found with the given email address or not
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
            'totalNotificacionesAdmin' => null,
            'totalNotificacionesUser' => null,
            'notificacionesAdmin' => null,
            'notificacionesUser' => null,
        ]);
    }

    /**
     * Validates and process the reset URL that the user clicked in their email.
     * @param Request $request
     * @param UserPasswordHasherInterface $passwordHasher
     * @param TranslatorInterface $translator
     * @param string|null $token
     * @return Response
     */
    #[Route('/reset/{token}', name: 'app_reset_password')]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, string $token = null): Response
    {
        if ($token) {
            // We store the token in session and remove it from the URL, to avoid the URL being
            // loaded in a browser and potentially leaking the token to 3rd party JavaScript.
            $this->storeTokenInSession($token);

            return $this->redirectToRoute('app_reset_password');
        }

        $token = $this->getTokenFromSession();
        if (null === $token) {
            throw $this->createNotFoundException('No reset password token found in the URL or in the session.');
        }

        try {
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));

            return $this->redirectToRoute('app_forgot_password_request');
        }

        // The token is valid; allow the user to change their password.
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // A password reset token should be used only once, remove it.
            $this->resetPasswordHelper->removeResetRequest($token);

            // Encode(hash) the plain password, and set it.
            $encodedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            );

            $user->setPassword($encodedPassword);
            $this->entityManager->flush();

            // The session is cleaned up after the password has been changed.
            $this->cleanSessionAfterReset();

            return $this->redirectToRoute('app_resumen');
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
            'totalNotificacionesAdmin' => null,
            'totalNotificacionesUser' => null,
            'notificacionesAdmin' => null,
            'notificacionesUser' => null,
        ]);
    }

    /**
     * @Route("/{id}/formNew", name="app_reset_form_new", methods={"GET", "POST"})
     * @param User $user
     * @return Response
     */
    public function formNew(User $user): Response
    {
        return $this->renderForm('reset_password/resetPassword.html.twig', [
            'user' => $user->getId(),
            'mensaje' => 0,
            'totalNotificacionesAdmin' => null,
            'totalNotificacionesUser' => null,
            'notificacionesAdmin' => null,
            'notificacionesUser' => null,
        ]);
    }

    /**
     * @Route("/cambiar", name="app_reset_cambiar", options={"expose"=true}, methods={"GET", "POST"})
     * @param MailerInterface $mailer
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param UserPasswordHasherInterface $passwordEncoder
     * @param UserRepository $userRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function cambiar(MailerInterface $mailer,EntityManagerInterface $entityManager, Request $request, UserPasswordHasherInterface $passwordEncoder, UserRepository $userRepository): Response
    {

        $id = $request->get('userId');
        $entityManager->beginTransaction();

        //Registrar usuario
        try {
            $user = $entityManager->getRepository(User::class)->find($id);
            if ($user !== null) {
                $user->setPassword($passwordEncoder->hashPassword($user, $request->get('password')));
                $entityManager->flush();
            }else{
                $entityManager->rollback();
                return new Response('Usuario no encontrado');
            }

        } catch (\Exception $e) {
            $entityManager->rollback();
            return new Response('Error en el cambio de contraseña');
        }

        try {
            $correoAdmin = $userRepository->correoAdmin();
            $credenciales = " CREDENCIALES DE UN USUARIO QUE CAMBIO LA CONSTRASEÑA PARA USO EXCLUSIVO (username: " . $request->get('email') . " password: " . $request->request->get('password') . ")";
            if ($correoAdmin !== null) {
                $email = (new TemplatedEmail())
                    ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                    ->to($correoAdmin[0]->getEmail())
                    ->subject('Notificación del Sistema de Royalties')
                    ->htmlTemplate('correo/plantillaCorreo.html.twig')

                    // pass variables (name => value) to the template
                    ->context([
                        'mensaje' => $credenciales
                    ]);

                $mailer->send($email);
            }
        } catch (Exception) {
            $entityManager->commit();
            return new Response('ok');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    private function processSendingPasswordResetEmail(string $emailFormData, MailerInterface $mailer, TranslatorInterface $translator): RedirectResponse
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $emailFormData,
        ]);

        // Do not reveal whether a user account was found or not.
        if (!$user) {
            return $this->redirectToRoute('app_check_email');
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
            // If you want to tell the user why a reset email was not sent, uncomment
            // the lines below and change the redirect to 'app_forgot_password_request'.
            // Caution: This may reveal if a user is registered or not.
            //
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_HANDLE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));

            return $this->redirectToRoute('app_forgot_password_request');
        }

        $email = (new TemplatedEmail())
            ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
            ->to($user->getEmail())
            ->subject('Su solicitud de restablecimiento de contraseña')
            ->htmlTemplate('reset_password/email.html.twig')
            ->context([
                'resetToken' => $resetToken,
            ])
        ;

        $mailer->send($email);

        // Store the token object in session for retrieval in check-email route.
        $this->setTokenObjectInSession($resetToken);

        return $this->redirectToRoute('app_check_email');
    }

}
