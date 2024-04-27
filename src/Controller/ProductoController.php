<?php

namespace App\Controller;

use App\Entity\Notificacion;
use App\Entity\Pack;
use App\Entity\PackProducto;
use App\Entity\Producto;
use App\Entity\ProductoAmortizacion;
use App\Entity\User;
use App\Repository\NotificacionRepository;
use App\Repository\ProductoAmortizacionRepository;
use App\Repository\ProductoRepository;
use App\Repository\TipoNotificacionRepository;
use App\Repository\UserRepository;
use App\Service\PdfService;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

/**
 * @Route("/producto")
 */
class ProductoController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_producto_index", methods={"GET"})
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
        $id = $user->getId();

        return $this->render('producto/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'productos' => $productoRepository->findBy(['tipoProducto' => array('1', '2'), 'isActive' => true]),
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
            'product' => 1,
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

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/pdf", name="app_producto_list_pdf", methods={"GET"})
     * @param ProductoRepository $productoRepository
     * @param PdfService $pdf
     * @return Response
     */
    public function generatePdfListProduct(ProductoRepository $productoRepository, PdfService $pdf): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $html = $this->render('producto/detail_index.html.twig', [
            'productos' => $productoRepository->findBy(['tipoProducto' => array('1', '2'), 'isActive' => true])
        ]);

        //return $html;

        $pdf->showPdfFile($html);
    }

    /**
     * @Route("/misProductos", name="app_mis_productos", methods={"GET"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function misProductos(UserRepository $userRepository, ProductoRepository $productoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('asignar_producto/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'productos' => $productoRepository->findBy(array('user' => $user, 'tipoProducto' => array('1', '2'))),
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
            'product' => 1,
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

    /**
     * @Route("/formNew", name="app_producto_form_new", methods={"GET", "POST"})
     * @param NotificacionRepository $notificacionRepository
     * @param UserRepository $userRepository
     * @return Response
     */
    public function formNew(NotificacionRepository $notificacionRepository, UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('producto/addProducto.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'users' => $userRepository->productoNombreApellido(),
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
            'product' => 1,
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
     * @Route("/new", name="app_producto_new", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     */
    public function new(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {

        $entityManager->beginTransaction();
        try {
            //obtener el usuario asignado en el producto
            $user = $this->obtenerUsuario($entityManager, $request);

            if ($user === null) {
                $entityManager->rollback();
                return new Response('Error localizando al usuario asignado');
            }

            //verificar si existe idd del nuevo producto
            $idd = $this->verificarId($entityManager, $request);

            if ($idd !== null && $idd > 0) {
                $entityManager->rollback();
                return new Response('El idd del producto ya existe, registre uno diferente');
            }

            //Registrar nuevo producto
            $producto = $this->registrarNuevoProducto($entityManager, $request, $user);

            if ($producto === null) {
                $entityManager->rollback();
                return new Response('Error registrando el producto');
            }

            //Registrar la amortización del producto
            $amortizacion = $this->registrarAmortizacionProducto($entityManager, $request, $producto, $user);

            if ($amortizacion === null) {
                $entityManager->rollback();
                return new Response('Error registrando la amortización del producto');
            }

            //notificar por el sistema al usuario del nuevo producto
            $notificarSistema = $this->notificarSistema($entityManager, 7, $producto, $user);
            if ($notificarSistema === null) {
                return new Response('Error enviando notificación al usuario');
            }

            //notificar por el correo al administrador producto agotado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo' => 7]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            } else {
                $mensaje = "A usted se le asignó el producto " . $producto->getNombre() . " en el Sistema de Royalties";
            }
            $notificarCorreo = $this->notificarCorreo($mailer, $producto, $user->getEmail(), $mensaje);
            if ($notificarCorreo === null) {
                return new Response('Error enviando correo al usuario');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando el producto');
        }
    }

    /**
     * @Route("/{id}", name="app_producto_show", methods={"GET"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param Producto $producto
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function show(UserRepository $userRepository, ProductoRepository $productoRepository, Producto $producto, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('producto/show.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'productos' => $productoRepository->findAll(),
            'users' => $userRepository->findBy(array('isActive' => true)),
            'royaltiesp' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'producto' => $producto,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 1,
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

    /**
     * @Route("/pdf/{id}", name="app_producto_pdf", methods={"GET"})
     * @param ProductoRepository $productoRepository
     * @param Producto $producto
     * @param PdfService $pdf
     * @return Response
     */
    public function generatePdfProduct(ProductoRepository $productoRepository, Producto $producto, PdfService $pdf): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $html = $this->render('producto/details_show.html.twig', [
            'productos' => $productoRepository->findAll(),
            'producto' => $producto
        ]);

        //return $html;

        $pdf->showPdfFile($html);
    }

    /**
     * @Route("/{id}/edit", name="app_producto_form_edit", methods={"GET", "POST"})
     * @param UserRepository $userRepository
     * @param Producto $producto
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function edit(UserRepository $userRepository, Producto $producto, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('producto/editProducto.html.twig', [
            'producto' => $producto,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
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
            'product' => 1,
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

    /**
     * @Route("/{id}/update", name="app_producto_update", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param Producto $producto
     * @param MailerInterface $mailer
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoAmortizacionRepository $productoAmortizacionRepository
     * @return Response
     */
    public function update(EntityManagerInterface $entityManager, Request $request, Producto $producto, MailerInterface $mailer, NotificacionRepository $notificacionRepository, ProductoAmortizacionRepository $productoAmortizacionRepository): Response
    {

        $entityManager->beginTransaction();
        try {
            //obtener el usuario asignado en el producto
            $user = $this->obtenerUsuario($entityManager, $request);

            if ($user === null) {
                $entityManager->rollback();
                return new Response('Error localizando al usuario asignado');
            }

            //Registrar nuevo producto
            $productoActualizado = $this->modificarProducto($entityManager, $request, $producto, $user);

            if ($productoActualizado === null) {
                $entityManager->rollback();
                return new Response('Error modificando el producto');
            }

            //verificar si existe idd del nuevo producto
            $idd = $this->verificarId($entityManager, $request);

            if ($idd !== null && $idd > 1) {
                $entityManager->rollback();
                return new Response('El idd del producto ya existe, actualice uno diferente');
            }

            //Verificar el usuario del producto
            $verificarUsuario = $this->verificarUsuarioProducto($entityManager, $notificacionRepository, $request, $productoActualizado, $user);

            if ($verificarUsuario === null) {
                $entityManager->rollback();
                return new Response('Error verificando el usuario del producto');
            }

            //Verificar la amortización del producto
            $verificarAmortizacion = $this->verificarAmortizacionProducto($entityManager, $productoAmortizacionRepository, $request, $productoActualizado, $user);

            if ($verificarAmortizacion === null) {
                $entityManager->rollback();
                return new Response('Error verificando la amortización del producto');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando el producto');
        }
    }

    /**
     * @Route("/delete", name="app_producto_delete", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function delete(EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->beginTransaction();

        $producto = $entityManager->getRepository(Producto::class)->find($request->get('id'));
        if ($producto !== null) {
            try {
                $producto->setIsActive(false);
                $entityManager->flush();
            } catch (Exception) {
                $entityManager->rollback();
                return new Response('Error borrando el producto');
            }
        } else {
            $entityManager->rollback();
            return new Response('Error localizando el producto');
        }

        //Borrar los productos de los packs
        $productosPack = $entityManager->getRepository(PackProducto::class)->findBy(['producto' => $producto]);
        if (!empty($productosPack)) {
            foreach ($productosPack as $n) {
                $beneficioProducto = $n->getBeneficioxventa();
                $pack = $n->getPack();
                if ($pack !== null) {
                    $packs = $entityManager->getRepository(Pack::class)->find($pack->getId());
                    if ($packs !== null) {
                        $beneficioPack = $packs->getBeneficioxventa();
                        $restante = $beneficioPack - $beneficioProducto;
                        $packs->setBeneficioxventa($restante);
                        $entityManager->flush();
                    } else {
                        $entityManager->rollback();
                        return new Response('Error localizando  el pack al que pertenece el producto');
                    }
                } else {
                    $entityManager->rollback();
                    return new Response('Error localizando el producto en un pack');
                }
                $entityManager->remove($n);
            }
            $entityManager->flush();
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    //Funciones para registrar un producto
    private function verificarId(EntityManagerInterface $entityManager, Request $request)
    {
        $idd = $entityManager->getRepository(Producto::class)->totalIdProductos($request->get('idd'));
        return $idd ?? null;
    }

    private function obtenerUsuario(EntityManagerInterface $entityManager, Request $request)
    {
        $user = $entityManager->getRepository(User::class)->find($request->get('usuario'));
        return $user ?? null;
    }

    private function registrarNuevoProducto(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
            $producto = new Producto();
            $producto->setNombre($request->get('nombre'));
            $producto->setTipoProducto((int)$request->get('tipoProducto'));
            $producto->setBeneficioxventa((float)$request->get('beneficio'));
            $producto->setTipodemoneda($request->get('tipoMoneda'));
            $producto->setIdd($request->get('idd'));
            $producto->setStock((int)$request->get('stock'));
            $producto->setStockAdvertencia((int)$request->get('avisStock'));
            $producto->setUser($user);
            if ($request->request->get('fichero') !== null) {
                $producto->setImagen($request->get('fichero'));
            }
            $entityManager->persist($producto);
            $entityManager->flush();
            return $producto;
        } catch (Exception) {
            return null;
        }
    }

    private function registrarAmortizacionProducto(EntityManagerInterface $entityManager, Request $request, $producto, $user)
    {
        if ($request->get('amortizacion') === '1') {
            try {
                $amortizacion = new ProductoAmortizacion();
                $amortizacion->setCostoProduccion((float)$request->get('costo'));
                $amortizacion->setPrecioVenta((float)$request->get('precio'));
                $amortizacion->setSaldoRestante((float)$request->get('costo'));
                $amortizacion->setIsAdministrador($request->get('isAdministrador'));
                $amortizacion->setIsActive(true);
                $amortizacion->setProducto($producto);
                $amortizacion->setUser($user);
                $entityManager->persist($amortizacion);
                $entityManager->flush();
            } catch (Exception) {
                return null;
            }
        }
        return 'ok';
    }

    private function notificarSistema(EntityManagerInterface $entityManager, $tipo, $producto, $user)
    {
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo($tipo);
            $notificacion->setProducto($producto);
            $notificacion->setUser($user);
            $entityManager->persist($notificacion);
            $entityManager->flush();
            return 'ok';
        } catch (Exception) {
            return null;
        }
    }

    private function notificarCorreo(MailerInterface $mailer, $producto, $correo, $mensaje)
    {
        try {
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($correo)
                ->subject('Notificación del Sistema de Royalties')
                ->htmlTemplate('correo/plantillaCorreo.html.twig')
                ->context([
                    'mensaje' => $mensaje
                ]);

            $mailer->send($email);
            return 'ok';
        } catch (TransportExceptionInterface) {
            return 'ok';
        }
    }

    //Funciones para actualizar un producto
    private function modificarProducto(EntityManagerInterface $entityManager, Request $request, $producto, $user)
    {
        try {
            $producto->setNombre($request->get('nombre'));
            $producto->setTipoProducto($request->get('tipoProducto'));
            $producto->setBeneficioxventa((float)$request->get('beneficio'));
            $producto->setTipodemoneda($request->get('tipoMoneda'));
            $producto->setIdd($request->get('idd'));
            $producto->setStock((int)$request->get('stock'));
            $producto->setStockAdvertencia((int)$request->get('avisStock'));
            $producto->setUser($user);
            if ($request->request->get('fichero') !== '') {
                $producto->setImagen($request->get('fichero'));
            }

            $entityManager->flush();
            return $producto;
        } catch (Exception) {
            return null;
        }
    }

    private function verificarUsuarioProducto(EntityManagerInterface $entityManager, NotificacionRepository $notificacionRepository, Request $request, $producto, $user)
    {
        if ($request->get('usuario') !== $request->get('usuarioAnterior')) {
            //notificar por el sistema al usuario del nuevo producto
            $borrar = $this->borrarNotificacion($notificacionRepository, $producto);
            if ($borrar === null) {
                return null;
            }
            //notificar por el sistema al usuario del nuevo producto
            $notificarSistema = $this->notificarSistema($entityManager, 7, $producto, $user);
            if ($notificarSistema === null) {
                return null;
            }
        }
        return 'ok';
    }

    private function verificarAmortizacionProducto(EntityManagerInterface $entityManager, ProductoAmortizacionRepository $productoAmortizacionRepository, Request $request, $producto, $user)
    {
        if ($request->get('amortizacion') === '1') {
            $amortizacion = $productoAmortizacionRepository->findOneBy(array('producto' => $producto));
            if ($amortizacion !== null) {
                //Modificar amortización del producto
                $amortizacion = $this->modificarAmortizacionProducto($entityManager, $request, $amortizacion, $producto, $user);
                if ($amortizacion === null) {
                    return null;
                }
            } else {
                //Insertar amortización del producto
                $amortizacion = $this->registrarAmortizacionProducto($entityManager, $request, $producto, $user);
                if ($amortizacion === null) {
                    return null;
                }
            }
        }
        return 'ok';
    }

    private function modificarAmortizacionProducto(EntityManagerInterface $entityManager, Request $request, $amortizacion, $producto, $user)
    {
        try {
            $amortizacion->setCostoProduccion((float)$request->get('costo'));
            $amortizacion->setPrecioVenta((float)$request->get('precio'));
            $amortizacion->setSaldoRestante((float)$request->get('costo'));
            $amortizacion->setIsAdministrador($request->get('isAdministrador'));
            $amortizacion->setIsActive(true);
            $amortizacion->setProducto($producto);
            $amortizacion->setUser($user);
            $entityManager->flush();
        } catch (Exception) {
            return null;
        }
        return 'ok';
    }

    private function borrarNotificacion(NotificacionRepository $notificacionRepository, $producto)
    {
        try {
            try {
                $notificacion = $notificacionRepository->findOneBy(array('producto' => $producto));
                if ($notificacion !== null) {
                    $notificacionRepository->remove($notificacion);
                }
            } catch (Exception) {
                return null;
            }
            return 'ok';
        } catch (Exception) {
            return null;
        }
    }
}
