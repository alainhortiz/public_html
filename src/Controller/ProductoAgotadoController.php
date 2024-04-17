<?php

namespace App\Controller;

use App\Entity\Producto;
use App\Repository\NotificacionRepository;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/producto/agotado")
 */
class ProductoAgotadoController extends AbstractController
{

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_producto_agotado_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, ProductoRepository $productoRepository, NotificacionRepository $notificacionRepository): Response
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
        return $this->render('producto_agotado/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'productos' => $productoRepository->productosAgotados(),
            'users' => $userRepository->findAll(),
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
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 1,
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

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/user", name="app_producto_agotado_user", methods={"GET"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function user(UserRepository $userRepository, ProductoRepository $productoRepository, NotificacionRepository $notificacionRepository): Response
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

        return $this->render('producto_agotado/indexUser.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'productos' => $productoRepository->productosAgotadosUser($id),
            'users' => $userRepository->findBy(array('isActive' => true)),
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
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 1,
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

    /**
     * @Route("/{id}/stock", name="app_producto_agotado_stock", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param Producto $stock
     * @return Response
     */
    public function stock(EntityManagerInterface $entityManager, Request $request, Producto $stock): Response
    {
        $entityManager->beginTransaction();

        //Modificar producto
        try {
            $stock->setStock( (int) $request->request->get('stock'));
            $stock->setStockAdvertencia( (int) $request->request->get('aviso'));

            $entityManager->persist($stock);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error actualizando el stock del producto');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();


        return new Response('ok');
    }

}
