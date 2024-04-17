<?php

namespace App\Controller;

use App\Repository\NotificacionRepository;
use App\Repository\ProductoRepository;
use App\Repository\SolicitarPagoRoyalAcumuladoRepository;
use App\Repository\UserRepository;
use App\Repository\VentaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistroPagosController extends AbstractController
{
    /**
     * @Route("/registro_pagos", name="app_registro_pagos")
     * @param SolicitarPagoRoyalAcumuladoRepository $pagoRoyalAcumuladoRepository
     * @param ProductoRepository $productoRepository
     * @param VentaRepository $ventaRepository
     * @param UserRepository $userRepository
     * @param SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(SolicitarPagoRoyalAcumuladoRepository $pagoRoyalAcumuladoRepository, ProductoRepository $productoRepository, VentaRepository $ventaRepository, UserRepository $userRepository, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        $total = $ventaRepository->dadofechayuserobtenertotalacum($id[0]['id']);
        $saldo = $productoRepository->totalusd($id[0]['id'])[0][1] + $productoRepository->totaleuros($id[0]['id'])[0][1];
        $restar = $pagoRoyalAcumuladoRepository->obtenerroyalapagar();

        if (count($restar) > 0) {
            $saldofinal = $saldo - $restar[0]['royaltiespagar'];
        } else {
            $saldofinal = $saldo - 0;
        }

        return $this->render('registro_pagos/index.html.twig', [
            'solicitar_pago_royal_acumulados' => $solicitarPagoRoyalAcumuladoRepository->findAll(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'royalacum' => $total[0][1] ? null : 0,
            'saldo' => $saldofinal,
            'royaltiesacum' => 0,
            'totalacumulado' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'royaltiesp' => 1,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignars' => 0,
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
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
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