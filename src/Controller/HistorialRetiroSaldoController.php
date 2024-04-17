<?php

namespace App\Controller;

use App\Repository\NotificacionRepository;
use App\Repository\RetiroSaldoRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/historial/retiro/saldo")
 */
class HistorialRetiroSaldoController extends AbstractController
{
    /**
     * @Route("/", name="app_historial_retiro_saldo_index", methods={"GET"})
     * @param RetiroSaldoRepository $retiroSaldoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(RetiroSaldoRepository $retiroSaldoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();
        $roles = $user->getRoles();

        if ($roles[0] === 'ROLE_ADMIN') {
            $retiros = $retiroSaldoRepository->findAll();
        } else {
            $retiros = $retiroSaldoRepository->findBy(array('user' => $user));
        }

        return $this->render('historial_retiro_saldo/index.html.twig', [
            'retiros' => $retiros,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'totalacumulado' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'royaltiesp' => 0,
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
            'hist' => 1,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'mensaje' => 0,
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
