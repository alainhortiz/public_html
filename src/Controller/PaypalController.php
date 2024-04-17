<?php

namespace App\Controller;

use App\Entity\Paypal;
use App\Form\PaypalType;
use App\Repository\NotificacionRepository;
use App\Repository\PaypalRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/paypal")
 */
class PaypalController extends AbstractController
{
    /**
     * @Route("/", name="app_paypal_index", methods={"GET"})
     * @param PaypalRepository $paypalRepository
     * @param AuthenticationUtils $authenticationUtils
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(PaypalRepository $paypalRepository, AuthenticationUtils $authenticationUtils, UserRepository $userRepository,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('paypal/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'users' => $userRepository->findAll(),
            'paypals' => $paypalRepository->findAll(),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'asignars' => 0,
            'service' => 0,
            'royaltiesp' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 1,
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);

    }


    /**
     * @Route("/new", name="app_paypal_new", methods={"GET", "POST"})
     * @param Request $request
     * @param PaypalRepository $paypalRepository
     * @param UserRepository $userRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function new(Request $request, PaypalRepository $paypalRepository, UserRepository $userRepository): Response
    {
        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);
        $idd = $userRepository->findById($id[0]['id']);
        $paypal = new Paypal();
        $form = $this->createForm(PaypalType::class, $paypal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (count($paypalRepository->findAll()) == 1) {
                return $this->renderForm('paypal/new.html.twig', [
                    'paypal' => $paypal,
                    'form' => $form,
                    'msj' => 1,
                ]);

            } else {
                $paypal->setUsuarioid($idd[0]);
                $paypalRepository->add($paypal);
                return $this->redirectToRoute('app_paypal_index', [], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->renderForm('paypal/new.html.twig', [
            'paypal' => $paypal,
            'form' => $form,
            'msj' => 0,
        ]);
    }


    /**
     * @Route("/{id}", name="app_paypal_show", methods={"GET"})
     * @param Paypal $paypal
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function show(Paypal $paypal,NotificacionRepository $notificacionRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('paypal/show.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'paypal' => $paypal,
            'asignars' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'royaltiesp' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 1,
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_paypal_edit", methods={"GET", "POST"})
     * @param Request $request
     * @param Paypal $paypal
     * @param PaypalRepository $paypalRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function edit(Request $request, Paypal $paypal, PaypalRepository $paypalRepository): Response
    {
        $form = $this->createForm(PaypalType::class, $paypal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $paypalRepository->add($paypal);
            return $this->redirectToRoute('app_paypal_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('paypal/edit.html.twig', [
            'paypal' => $paypal,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_paypal_delete", methods={"POST"})
     * @param Request $request
     * @param Paypal $paypal
     * @param PaypalRepository $paypalRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Request $request, Paypal $paypal, PaypalRepository $paypalRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $paypal->getId(), $request->request->get('_token'))) {
            $paypalRepository->remove($paypal);
        }

        return $this->redirectToRoute('app_paypal_index', [], Response::HTTP_SEE_OTHER);
    }
}
