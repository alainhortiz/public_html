<?php

namespace App\Controller;

use App\Repository\NotificacionRepository;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use App\Repository\VentaRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class   ResumenController extends AbstractController
{
    /**
     * @Route("/", name="app_resumen")
     * @param AuthenticationUtils $authenticationUtils
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param VentaRepository $ventaRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(AuthenticationUtils $authenticationUtils, UserRepository $userRepository, ProductoRepository $productoRepository, VentaRepository $ventaRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $activado = $user->getIsActive();
        $id = $user->getId();

        if ($activado) {
            setlocale(LC_ALL, "es_ES");
            $datofecha = date("l jS \of F Y ");
            $acumulado = $userRepository->totalAcumuladoUser($id);
            $bolsaGeneralDolar = $acumulado[0]['saldoGeneralUSD'];
            $bolsaGeneralEuros = $acumulado[0]['saldoGeneralEUR'];
            $bolsaLibroDolar = $acumulado[0]['saldoLibroUSD'];
            $bolsaLibroEuros = $acumulado[0]['saldoLibroEUR'];
            $bolsaServicioDolar = $acumulado[0]['saldoServicioUSD'];
            $bolsaServicioEuros = $acumulado[0]['saldoServicioEUR'];

            return $this->render('resumen/index.html.twig', [
                'totalu' => $userRepository->totalUsersActivos(),
                'totali' => $userRepository->totalUsersInactivos(),
                'totalp' => $productoRepository->totalproductos(),
                'totals' => $productoRepository->totalservicios(),
                'totalv' => $ventaRepository->totalventas(),
                'users' => $userRepository->nuevosUsuarios(),
                'bolsaGeneralDolar' => $bolsaGeneralDolar,
                'bolsaGeneralEuros' => $bolsaGeneralEuros,
                'bolsaLibroDolar' => $bolsaLibroDolar,
                'bolsaLibroEuros' => $bolsaLibroEuros,
                'bolsaServicioDolar' => $bolsaServicioDolar,
                'bolsaServicioEuros' => $bolsaServicioEuros,
                'misProductos' => $productoRepository->ultimos3productosUser($id),
                'misServicios' => $productoRepository->ultimos3serviciosUser($id),
                'usersNuevos' => $userRepository->nuevosUsuarios(),
                'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
                'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10','11','12','13')))),
                'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
                'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
                'fecha' => $datofecha,
                'resumen' => 1,
                'ranking' => 0,
                'historial' => 0,
                'royalties' => 0,
                'servicioacum' => 0,
                'royaltiesp' => 0,
                'ventas' => 0,
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
                'asignarp' => 0,
                'asignars' => 0,
                'ventastotal' => 0,
                'ventasptotal' => $ventaRepository->ultimos5registros(),
                'ultimosproductos' => $productoRepository->ultimos5registros(),
                'canceladas' => 0,
                'estad' => 0,
                'estadUser' => 0,
                'direcc' => 0,
                'pack' => 0,
                'ing' => 0,
                'tipoNot' => 0
            ]);
        }

        return $this->redirectToRoute('app_login', ['mensaje' => 1], Response::HTTP_SEE_OTHER);

    }

    /**
     * @Route("/productos_obtusuarios", name="productos_obtusuarios", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @param UserRepository $userRepository
     * @return JsonResponse
     * @throws Exception
     */
    public function obtusuarios(Request $request, UserRepository $userRepository): JsonResponse
    {
        if ($request->isXmlHttpRequest()) {
            $parametros = $request->request->all();
            $nombresemp = $userRepository->usuariosasignadosproduct($parametros['apto']);

            echo json_encode($nombresemp);
            die();
        }

        throw  new Exception('Estas intentando acceder en vano');
    }
}


