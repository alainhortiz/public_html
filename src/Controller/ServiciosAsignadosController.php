<?php

namespace App\Controller;

use App\Repository\NotificacionRepository;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiciosAsignadosController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/servicios_asignados", name="app_servicios_asignados")
     * @param ProductoRepository $productoRepository
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(ProductoRepository $productoRepository, UserRepository $userRepository,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('servicios_asignados/index.html.twig', [
            'servicios' => $productoRepository->findBy(array('user' => $user,'tipoProducto'=> array('3'),'isActive' => true)),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 1,
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
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

}
