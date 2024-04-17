<?php

namespace App\Controller;

use App\Repository\EstadoFondoRepository;
use App\Repository\NotificacionRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/estado")
 */
class EstadoController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_estado_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param EstadoFondoRepository $estadoFondoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, EstadoFondoRepository $estadoFondoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = 0;
        if ($user !== null) {
            $id = $user->getId();
        }


        return $this->render('estado/index.html.twig', [
            'users' => $userRepository->findBy(array('isActive' => true)),
            'movimientos' => $estadoFondoRepository->findAll(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'servicioss' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
            'royaltiesp' => 0,
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'estad' => 1,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/user", name="app_estado_user_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param EstadoFondoRepository $estadoFondoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function user(UserRepository $userRepository, EstadoFondoRepository $estadoFondoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = 0;
        if ($user !== null) {
            $id = $user->getId();
        }


        return $this->render('estado/indexUser.html.twig', [
            'users' => $userRepository->findBy(array('isActive' => true)),
            'movimientos' => $estadoFondoRepository->findBy(['user' => $user]),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'servicioss' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
            'royaltiesp' => 0,
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 1,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

}
