<?php

namespace App\Controller;

use App\Entity\Pack;
use App\Entity\PackProducto;
use App\Entity\Producto;
use App\Repository\NotificacionRepository;
use App\Repository\PackRepository;
use App\Repository\ProductoRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pack")
 */
class PackController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_pack_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param PackRepository $packRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, PackRepository $packRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('pack/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'packs' => $packRepository->findBy(array('isActive' => true)),
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
            'pack' => 1,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/new", name="app_pack_new", methods={"GET", "POST"})
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoRepository $productoRepository
     * @return Response
     */
    public
    function new(NotificacionRepository $notificacionRepository, ProductoRepository $productoRepository): Response
    {
        $user = $this->getUser();
        $id = 0;
        if ($user !== null) {
            $id = $user->getId();
        }

        return $this->renderForm('pack/addPack.html.twig', [
            'productos' => $productoRepository->productosExistencia(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
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
            'pack' => 1,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/newFichero", name="app_producto_fichero", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function newFichero(Request $request): Response
    {

        $file = $request->files->get('upload');
        $status = array('status' => "success", "fileUploaded" => false);

        // Move the file to the directory where brochures are stored
        try {
            // If a file was uploaded
            if (!is_null($file)) {
                // generar un nombre aleatorio para el archivo pero mantener la extensión
//                $filename = uniqid('', true) . "." . $file->getClientOriginalExtension();
                $filename = $file->getClientOriginalName();
                $file->move($this->getParameter('brochures_directory'), $filename); // mover el archivo a una ruta
                $status = array('status' => "success", 'fichero' => $filename, "fileUploaded" => true);
            }
        } catch (FileException) {
            $status = array('status' => "error", "fileUploaded" => false);
        }

        return new JsonResponse($status);
    }

    /**
     * @Route("/insert", name="app_pack_insert", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function insert(EntityManagerInterface $entityManager, Request $request): Response
    {

        $entityManager->beginTransaction();
        try {

            //registrar pack de productos
            $pack = $this->registrarPack($entityManager, $request);

            if ($pack === null) {
                $entityManager->rollback();
                return new Response('Error registrando el pack de productos');
            }

            //insertar productos del pack
            $productos = $this->agregarProductosPack($entityManager, $request, $pack);

            if ($productos === null) {
                $entityManager->rollback();
                return new Response('Error registrando los productos del pack');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la venta');
        }
    }

    /**
     * @Route("/{id}", name="app_pack_show", methods={"GET"})
     * @param UserRepository $userRepository
     * @param Pack $pack
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function show(UserRepository $userRepository, Pack $pack, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('pack/show.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'users' => $userRepository->findBy(array('isActive' => true)),
            'royaltiesp' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'packProducto' => $pack,
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
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 1,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_pack_edit", methods={"GET", "POST"})
     * @param UserRepository $userRepository
     * @param Pack $pack
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoRepository $productoRepository
     * @return Response
     */
    public function edit(UserRepository $userRepository, Pack $pack, NotificacionRepository $notificacionRepository, ProductoRepository $productoRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('pack/editPack.html.twig', [
            'productos' => $productoRepository->productosExistencia(),
            'packProductos' => $pack,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'users' => $userRepository->productoNombreApellido(),
            'royaltiesp' => 0,
            'resumen' => 0,
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
            'vp' => 0,
            'vs' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 1,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/update", name="app_pack_update", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function update(EntityManagerInterface $entityManager, Request $request): Response
    {

        $entityManager->beginTransaction();
        try {

            //modificar pack de productos
            $pack = $this->modificarPack($entityManager, $request);

            if ($pack === null) {
                $entityManager->rollback();
                return new Response('Error modificando el pack de productos');
            }

            //borrar productos del pack
            $productos = $this->borrarProductosPack($entityManager, $pack);

            if ($productos === null) {
                $entityManager->rollback();
                return new Response('Error modificando los productos del pack');
            }

            //modificar productos del pack
            $productos = $this->agregarProductosPack($entityManager, $request, $pack);

            if ($productos === null) {
                $entityManager->rollback();
                return new Response('Error modificando los productos del pack');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la venta');
        }
    }

    /**
     * @Route("/delete", name="app_pack_delete", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function delete(EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->beginTransaction();

        $pack = $entityManager->getRepository(Pack::class)->find($request->get('id'));
        if ($pack !== null) {
            try {
                $pack->setIsActive(false);
                $entityManager->flush();
            } catch (Exception) {
                $entityManager->rollback();
                return new Response('Error borrando el pack de productos');
            }
        } else {
            $entityManager->rollback();
            return new Response('Error localizando el pack de productos');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');

    }


    //Funciones para registrar un pack de productos
    private function registrarPack(EntityManagerInterface $entityManager, Request $request)
    {
        try {
            $pack = new Pack();
            $pack->setNombre($request->get('nombre'));
            $pack->setBeneficioxventa((float)$request->get('beneficioTotal'));
            $pack->setTipodemoneda($request->get('tipoMoneda'));
            $pack->setIsActive(true);
            if ($request->get('fichero') !== null) {
                $pack->setImagen($request->get('fichero'));
            }
            $entityManager->persist($pack);
            $entityManager->flush();
            return $pack;

        } catch (Exception) {
            return null;
        }

    }

    private function agregarProductosPack(EntityManagerInterface $entityManager, Request $request, $pack)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                $packProducto = new PackProducto();
                $packProducto->setBeneficioxventa((float)$p['beneficioVenta']);
                $packProducto->setPack($pack);
                $producto = $entityManager->getRepository(Producto::class)->find($p['idProducto']);
                if ($producto !== null) {
                    $packProducto->setProducto($producto);
                } else {
                    return null;
                }
                $entityManager->persist($packProducto);
                $entityManager->flush();
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    //Funciones para registrar un pack de productos
    private function modificarPack(EntityManagerInterface $entityManager, Request $request)
    {
        try {
            $pack = $entityManager->getRepository(Pack::class)->find($request->get('idPack'));
            if ($pack !== null) {
                $pack->setNombre($request->get('nombre'));
                $pack->setBeneficioxventa((float)$request->get('beneficioTotal'));
                $pack->setTipodemoneda($request->get('tipoMoneda'));
                $pack->setIsActive(true);
                $entityManager->flush();
                return $pack;
            }

            return null;

        } catch (Exception) {
            return null;
        }

    }

    private function borrarProductosPack(EntityManagerInterface $entityManager, $pack)
    {
        try {
            $pack = $entityManager->getRepository(PackProducto::class)->findBy(['pack' => $pack]);
            if ($pack !== null) {
                foreach ($pack as $p) {
                    $entityManager->remove($p);
                }
                $entityManager->flush();
            }else {
                return null;
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

}
