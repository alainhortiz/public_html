<?php

namespace App\Controller;

use App\Entity\ProductoAmortizacion;
use App\Repository\NotificacionRepository;
use App\Repository\ProductoAmortizacionRepository;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use App\Repository\VentaProductoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/amortizacion")
 */
class AmortizacionController extends AbstractController
{
    /**
     * @Route("/", name="app_amortizacion_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoAmortizacionRepository $amortizacionRepository
     * @param VentaProductoRepository $ventaProductoRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, ProductoRepository $productoRepository, NotificacionRepository $notificacionRepository, ProductoAmortizacionRepository $amortizacionRepository, VentaProductoRepository $ventaProductoRepository): Response
    {

        $user = $this->getUser();
        $id = 0;
        if ($user !== null) {
            $id = $user->getId();
        }

        return $this->render('amortizacion/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'productos' => $productoRepository->findBy(['tipoProducto' => array('1', '2'), 'isActive' => true]),
            'users' => $userRepository->findBy(array('isActive' => true)),
            'amortizaciones' => $amortizacionRepository->findAll(),
            'ventasProductos' => $ventaProductoRepository->findAll(),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'royaltiesp' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'amortizacion' => 1,
            'estad' => 0,
            'estadUser' => 0,
            'amortizacionUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/new", name="app_amortizacion_new", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param ProductoRepository $productoRepository
     * @return Response
     */
    public function new(EntityManagerInterface $entityManager, Request $request, ProductoRepository $productoRepository): Response
    {

        $entityManager->beginTransaction();

        $producto = $productoRepository->find($request->request->get('idProducto'));
        if ($producto !== null) {
        //Insertar amortización del producto
            try {
                $amortizacion = new ProductoAmortizacion();
                $amortizacion->setCostoProduccion((float)$request->request->get('costo'));
                $amortizacion->setPrecioVenta((float)$request->request->get('precio'));
                $amortizacion->setSaldoRestante((float)$request->request->get('costo'));
                $amortizacion->setIsAdministrador($request->request->get('isAdministrador'));
                $amortizacion->setIsActive(true);
                $amortizacion->setProducto($producto);
                $amortizacion->setUser($producto->getUser());
                $entityManager->persist($amortizacion);
                $entityManager->flush();
            } catch (Exception) {
                $entityManager->rollback();
                return new Response('Error registrando la amortización');
            }
        }else {
            $entityManager->rollback();
            return new Response('Error localizando el producto');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/user", name="app_amortizacion_user_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoAmortizacionRepository $amortizacionRepository
     * @param VentaProductoRepository $ventaProductoRepository
     * @return Response
     */
    public function user(UserRepository $userRepository, ProductoRepository $productoRepository, NotificacionRepository $notificacionRepository, ProductoAmortizacionRepository $amortizacionRepository, VentaProductoRepository $ventaProductoRepository): Response
    {

        $user = $this->getUser();
        $id = 0;
        if ($user !== null) {
            $id = $user->getId();
        }

        return $this->render('amortizacion/indexUsuario.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'productos' => $productoRepository->findBy(['user' => $user, 'tipoProducto' => array('1', '2')]),
            'users' => $userRepository->findBy(array('isActive' => true)),
            'amortizaciones' => $amortizacionRepository->findAll(),
            'ventasProductos' => $ventaProductoRepository->findAll(),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'royaltiesp' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 1,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }


}
