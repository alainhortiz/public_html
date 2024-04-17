<?php

namespace App\Controller;

use App\Repository\NotificacionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @param Request $request
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils, Request $request, NotificacionRepository $notificacionRepository): Response
    {
        $mensaje = $request->request->all();

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        $user = $this->getUser();
        if($user !== null) {
            $id = $user->getId();
        }else{
            $id = 0;
        }

        return $this->render('security/login.html.twig',
            ['mensaje' => $mensaje,
                'last_username' => $lastUsername,
                'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
                'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
                'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
                'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
                'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
