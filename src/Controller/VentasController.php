<?php

namespace App\Controller;

use App\Repository\NotificacionRepository;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use App\Repository\VentaProductoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VentasController extends AbstractController
{
    /**
     * @Route("/ventas", name="app_ventas")
     * @param UserRepository $userRepository
     * @param VentaProductoRepository $ventaProductoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, VentaProductoRepository $ventaProductoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        $acumulado = $userRepository->totalAcumuladoUser($id);
        $bolsaGeneralDolar = $acumulado[0]['saldoGeneralUSD'];
        $bolsaGeneralEuros = $acumulado[0]['saldoGeneralEUR'];
        $bolsaLibroDolar = $acumulado[0]['saldoLibroUSD'];
        $bolsaLibroEuros = $acumulado[0]['saldoLibroEUR'];
        $bolsaServicioDolar = $acumulado[0]['saldoServicioUSD'];
        $bolsaServicioEuros = $acumulado[0]['saldoServicioEUR'];

        return $this->render('ventas/index.html.twig', [
            'totalu' => $userRepository->totalusers(),
            'users' => $userRepository->findAll(),
            'bolsaGeneralDolar' => $bolsaGeneralDolar,
            'bolsaGeneralEuros' => $bolsaGeneralEuros,
            'bolsaLibroDolar' => $bolsaLibroDolar,
            'bolsaLibroEuros' => $bolsaLibroEuros,
            'bolsaServicioDolar' => $bolsaServicioDolar,
            'bolsaServicioEuros' => $bolsaServicioEuros,
            'ventasProductos' => $ventaProductoRepository->ventasUsuarios($id),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 1,
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
            'royaltiesp' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'totalv' => 0,
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
