<?php

namespace App\Controller;

use App\Entity\EstadoFondo;
use App\Entity\Notificacion;
use App\Entity\Pack;
use App\Entity\Producto;
use App\Entity\ProductoAmortizacion;
use App\Entity\User;
use App\Entity\Venta;
use App\Entity\VentaCancelada;
use App\Entity\VentaProducto;
use App\Repository\NotificacionRepository;
use App\Repository\PackRepository;
use App\Repository\ProductoRepository;
use App\Repository\TipoNotificacionRepository;
use App\Repository\UserRepository;
use App\Repository\VentaRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/venta_productos")
 */
class VentaProductosController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_venta_productos_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param VentaRepository $ventaRepository
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoRepository $productoRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, VentaRepository $ventaRepository, NotificacionRepository $notificacionRepository, ProductoRepository $productoRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = 0;
        $roles = '';
        if ($user !== null) {
            $id = $user->getId();
            $roles = $user->getRoles();
        }

        if ($roles[0] === 'ROLE_USER') {
            $ventasProductos = $ventaRepository->obtenerlasventasdadouserp($id);
        } else {
            $ventasProductos = $ventaRepository->obtenerlasventasproductos();
        }

        return $this->render('venta_productos/index.html.twig', [
            'venta_productos' => $ventasProductos,
            'existenciaProductos' => $productoRepository->totalProductosExistencia(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'totalu' => $userRepository->totalusers(),
            'users' => $userRepository->findAll(),
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
            'royaltiesp' => 0,
            'vp' => 1,
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
     * @Route("/new", name="app_venta_productos_new", methods={"GET", "POST"})
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoRepository $productoRepository
     * @param PackRepository $packRepository
     * @return Response
     */
    public
    function new(NotificacionRepository $notificacionRepository, ProductoRepository $productoRepository, PackRepository $packRepository): Response
    {
        $user = $this->getUser();
        $id = 0;
        if ($user !== null) {
            $id = $user->getId();
        }

        return $this->renderForm('venta_productos/addVentaProducto.html.twig', [
            'productos' => $productoRepository->productosExistencia(),
            'packs' => $packRepository->findBy(array('isActive' => true)),
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
            'vp' => 1,
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
     * @Route("/insert", name="app_venta_producto_insert", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     */
    public function insert(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {

        $entityManager->beginTransaction();
        try {

            //obtener el administrador
            $administrador = $this->obtenerAdministrador($entityManager);

            if ($administrador === null) {
                $entityManager->rollback();
                return new Response('Error localizando al administrador');
            }

            //insertar venta
            $venta = $this->agregarVenta($entityManager, $request);

            if ($venta === null) {
                $entityManager->rollback();
                return new Response('Error registrando la venta');
            }

            //insertar productos de la venta
            $productos = $this->agregarProductosVenta($entityManager, $request, $venta);

            if ($productos === null) {
                $entityManager->rollback();
                return new Response('Error registrando los productos de la venta');
            }

            //actualizar la amortización de los productos
            $amortizacion = $this->actualizarAmortizacion($entityManager, $request);

            if ($amortizacion === null) {
                $entityManager->rollback();
                return new Response('Error actualizando la amortización de los productos');
            }

            //actualizar el stock de los productos
            $stock = $this->actualizarStockProducto($entityManager, $request, $administrador, $mailer);

            if ($stock === null) {
                $entityManager->rollback();
                return new Response('Error actualizando el stock de los productos');
            }

            //actualizar los royalties del usuario
            $usuarioRoyalties = $this->actualizarRoyaltiesUsuario($entityManager, $request, $venta);

            if ($usuarioRoyalties === null) {
                $entityManager->rollback();
                return new Response('Error actualizando los royalties del usuario');
            }

            //actualizar la amortización del usuario
            $usuarioAmortizacion = $this->actualizarAmortizacionUsuario($entityManager, $request, $venta);

            if ($usuarioAmortizacion === null) {
                $entityManager->rollback();
                return new Response('Error actualizando la deuda de amortización del usuario');
            }

            //actualizar la amortización del administrador
            $administradorAmortizacion = $this->actualizarAmortizacionAdministrador($entityManager, $request, $venta, $administrador);

            if ($administradorAmortizacion === null) {
                $entityManager->rollback();
                return new Response('Error actualizando la deuda de amortización del administrador');
            }

            //notificar por correo los productos de la venta
            $this->notificarProductosVenta($entityManager, $request, $mailer);

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la venta');
        }
    }

    /**
     * @Route("/{id}", name="app_venta_productos_show", methods={"GET"})
     * @param Venta $venta
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function show(Venta $venta, NotificacionRepository $notificacionRepository): Response
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

        return $this->render('venta_productos/show.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'venta' => $venta,
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
            'vp' => 1,
            'royaltiesp' => 0,
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
     * @Route("/delete", name="app_venta_productos_delete", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function delete(EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->beginTransaction();
        try {
            //obtener el administrador
            $administrador = $this->obtenerAdministrador($entityManager);

            if ($administrador === null) {
                $entityManager->rollback();
                return new Response('Error localizando al administrador');
            }

            //obtener venta
            $venta = $this->obtenerVenta($entityManager, $request);

            if ($venta === null) {
                $entityManager->rollback();
                return new Response('Error localizando la venta');
            }

            //Registrar nuevo stock de productos
            $stock = $this->registrarNuevoStockProducto($entityManager, $venta);

            if ($stock === null) {
                $entityManager->rollback();
                return new Response('Error actualizando el stock de productos');
            }

            //Restaurar el costo a liquidar de la amortización del producto
            $amortizacion = $this->restaurarAmortizacion($entityManager, $venta);

            if ($amortizacion === null) {
                $entityManager->rollback();
                return new Response('Error actualizando el costo de producción del producto');
            }

            //Restaurar la cuenta del usuario restando la amortización del producto
            $saldoAmortizacionUsuario = $this->restaurarSaldoAmortizacionUsuario($entityManager, $venta);

            if ($saldoAmortizacionUsuario === null) {
                $entityManager->rollback();
                return new Response('Error actualizando la cuenta de usuario con la producción del producto');
            }

            //Actualizar el movimiento de cuenta del administrador con la amortización del producto
            $saldoAmortizacionAdministrador = $this->restaurarSaldoAmortizacionAdministrador($entityManager, $venta, $administrador);

            if ($saldoAmortizacionAdministrador === null) {
                $entityManager->rollback();
                return new Response('Error actualizando la cuenta de usuario con la producción del producto');
            }

            //Actualizar saldo del usuario
            $saldoRoyalties = $this->actualizarSaldoRoyaltiesUsuario($entityManager, $venta);

            if ($saldoRoyalties === null) {
                $entityManager->rollback();
                return new Response('Error actualizando el saldo acumulado del usuario');
            }

            //Borrando los productos de la venta
            $productos = $this->borrarVentaProductos($entityManager, $venta);

            if ($productos === null) {
                $entityManager->rollback();
                return new Response('Error borrando los productos de la venta');
            }

            //Borrar la venta
            $estado = $this->actualizarEstadoFondo($entityManager, $venta);

            if ($estado === null) {
                $entityManager->rollback();
                return new Response('Error actualizando el estado de cuenta');
            }

            //Borrar la venta
            $borrarVenta = $this->borrarVenta($entityManager, $venta);

            if ($borrarVenta === null) {
                $entityManager->rollback();
                return new Response('Error borrando la venta');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error cancelando la venta');
        }
    }

    //Funciones que resuelven la venta de productos
    private function obtenerAdministrador(EntityManagerInterface $entityManager)
    {
        $administrador = $this->getUser();
        if ($administrador !== null) {
            $userAdmin = $entityManager->getRepository(User::class)->find($administrador->getId());
            if ($userAdmin === null) {
                return $userAdmin;
            }
        } else {
            return null;
        }

        return $userAdmin;
    }

    private function agregarVenta(EntityManagerInterface $entityManager, Request $request)
    {
        try {
            $venta = new Venta();
            $venta->setFecha(new DateTime($request->get('fecha')));
            $venta->setCodigo($request->get('codigo'));
            $entityManager->persist($venta);
            $entityManager->flush();
        } catch (Exception) {
            return null;
        }

        return $venta;
    }

    private function agregarProductosVenta(EntityManagerInterface $entityManager, Request $request, $venta)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                $ventaProducto = new VentaProducto();
                $ventaProducto->setCantidad($p['cantidad']);
                $ventaProducto->setRoyaltie($p['royalties']);
                $ventaProducto->setVenta($venta);
                if ($p['isAmortizacion'] === '1') {
                    $amortizacion = $entityManager->getRepository(ProductoAmortizacion::class)->find($p['idAmortizacion']);
                    if ($amortizacion !== null) {
                        $ventaProducto->setPagoAmortizacion($p['pagoAmortizacion']);
                        $ventaProducto->setAmortizacion($amortizacion);
                    } else {
                        return null;
                    }
                }
                $producto = $entityManager->getRepository(Producto::class)->find($p['idProducto']);
                if ($producto !== null) {
                    $ventaProducto->setProducto($producto);
                } else {
                    return null;
                }
                if ($p['isPack'] === '1') {
                    $pack = $entityManager->getRepository(Pack::class)->find($p['idPack']);
                    if ($pack !== null) {
                        $ventaProducto->setPack($pack);
                    } else {
                        return null;
                    }
                }
                $entityManager->persist($ventaProducto);
                $entityManager->flush();
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function actualizarAmortizacion(EntityManagerInterface $entityManager, Request $request)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                if ($p['isAmortizacion'] === '1') {
                    $amortizacion = $entityManager->getRepository(ProductoAmortizacion::class)->find($p['idAmortizacion']);
                    if ($amortizacion !== null) {
                        $amortizacion->setSaldoRestante((float)$p['restante']);
                        if ($p['restante'] === '0.00') {
                            //Si se liquido la amortización la cierro
                            $amortizacion->setIsActive(false);
                        }
                        $entityManager->flush();
                    } else {
                        return null;
                    }
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function actualizarStockProducto(EntityManagerInterface $entityManager, Request $request, $userAdmin, MailerInterface $mailer)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                $producto = $entityManager->getRepository(Producto::class)->find($p['idProducto']);
                if ($producto !== null) {
                    $cantidadExistente = (int)$producto->getStock();
                    $aviso = (int)$producto->getStockAdvertencia();
                    $restante = $cantidadExistente - (int)$p['cantidad'];
                    $producto->setStock($restante);
                    $entityManager->flush();
                    if ($restante <= $aviso) {
                        //notificar por el sistema al administrador producto agotado
                        $notificar = $this->notificarSistema($entityManager, 2, $producto, $userAdmin);
                        if ($notificar === null) {
                            return null;
                        }
                        //notificar por el sistema al usuario producto agotado
                        $notificar = $this->notificarSistema($entityManager, 12, $producto, $producto->getUser());
                        if ($notificar === null) {
                            return null;
                        }
                        //notificar por el correo al administrador producto agotado
                        $mens = "Usted tiene agotado el producto " . $producto->getNombre() . " en el Sistema de Royalties";
                        $notificar = $this->notificarCorreo($mailer, $mens, $userAdmin->getEmail());
                        if ($notificar === null) {
                            return null;
                        }
                        //notificar por el correo al usuario producto agotado
                        if ($producto->getUser() !== null) {
                            $mens = "Usted tiene agotado el producto " . $producto->getNombre() . " en el Sistema de Royalties";
                            $notificar = $this->notificarCorreo($mailer, $mens, $producto->getUser()->getEmail());
                            if ($notificar === null) {
                                return null;
                            }
                        } else {
                            return null;
                        }
                    }
                } else {
                    return null;
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

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

    private function notificarCorreo(MailerInterface $mailer, $mens, $correo)
    {
        try {
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($correo)
                ->subject('Notificación del Sistema de Royalties')
                ->htmlTemplate('correo/plantillaCorreo.html.twig')
                ->context([
                    'mensaje' => $mens
                ]);

            $mailer->send($email);
            return 'ok';

        } catch (TransportExceptionInterface) {
            return 'ok';
        }

    }

    private function actualizarRoyaltiesUsuario(EntityManagerInterface $entityManager, Request $request, $venta)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                if ($p['isRoyalties'] === '1') {
                    $producto = $entityManager->getRepository(Producto::class)->find($p['idProducto']);
                    if ($producto !== null) {
                        $tipoProducto = $producto->getTipoProducto();
                        $moneda = $producto->getTipodemoneda();
                    } else {
                        return null;
                    }
                    $user = $entityManager->getRepository(User::class)->find($p['idUsuario']);
                    if ($user !== null) {
                        $ganancia = (float)$p['royalties'];
                        if ($tipoProducto === 1) {
                            if ($moneda === 'USD') {
                                $acumulado = (float)$user->getSaldoGeneralUSD();
                                $total = $acumulado + $ganancia;
                                $totalMovimiento = $total + (float)$user->getSaldoLibroUSD();
                                $user->setSaldoGeneralUSD($total);
                            } else {
                                $acumulado = (float)$user->getSaldoGeneralEUR();
                                $total = $acumulado + $ganancia;
                                $totalMovimiento = $total + (float)$user->getSaldoLibroEUR();
                                $user->setSaldoGeneralEUR($total);
                            }
                        } else if ($tipoProducto === 2) {
                            if ($moneda === 'USD') {
                                $acumulado = (float)$user->getSaldoLibroUSD();
                                $total = $acumulado + $ganancia;
                                $totalMovimiento = $total + (float)$user->getSaldoGeneralUSD();
                                $user->setSaldoLibroUSD($total);
                            } else {
                                $acumulado = (float)$user->getSaldoLibroEUR();
                                $total = $acumulado + $ganancia;
                                $totalMovimiento = $total + (float)$user->getSaldoGeneralEUR();
                                $user->setSaldoLibroEUR($total);
                            }
                        } else {
                            return null;
                        }
                        $entityManager->flush();
                        //actualizar el movimiento de la cuenta en dólares
                        $movimiento = $this->actualizarMovimiento($entityManager, $totalMovimiento, $moneda, 4, $user, $venta);
                        if ($movimiento === null) {
                            return null;
                        }
                    } else {
                        return null;
                    }
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function actualizarAmortizacionUsuario(EntityManagerInterface $entityManager, Request $request, $venta)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                if ($p['isAmortizacion'] === '1') {
                    $amortizacion = $entityManager->getRepository(ProductoAmortizacion::class)->find($p['idAmortizacion']);
                    if ($amortizacion !== null) {
                        if (!$amortizacion->isAdministrador()) {
                            $producto = $entityManager->getRepository(Producto::class)->find($p['idProducto']);
                            if ($producto !== null) {
                                $tipoProducto = $producto->getTipoProducto();
                                $moneda = $producto->getTipodemoneda();
                                $user = $entityManager->getRepository(User::class)->find($p['idUsuario']);
                                if ($user !== null) {
                                    $ganancia = (float)$p['pagoAmortizacion'];
                                    if ($tipoProducto === 1) {
                                        if ($moneda === 'USD') {
                                            $acumulado = (float)$user->getSaldoGeneralUSD();
                                            $total = $acumulado + $ganancia;
                                            $totalMovimiento = $total + (float)$user->getSaldoLibroUSD();
                                            $user->setSaldoGeneralUSD($total);
                                        } else {
                                            $acumulado = (float)$user->getSaldoGeneralEUR();
                                            $total = $acumulado + $ganancia;
                                            $totalMovimiento = $total + (float)$user->getSaldoLibroEUR();
                                            $user->setSaldoGeneralEUR($total);
                                        }
                                    } else if ($tipoProducto === 2) {
                                        if ($moneda === 'USD') {
                                            $acumulado = (float)$user->getSaldoLibroUSD();
                                            $total = $acumulado + $ganancia;
                                            $totalMovimiento = $total + (float)$user->getSaldoGeneralUSD();
                                            $user->setSaldoLibroUSD($total);
                                        } else {
                                            $acumulado = (float)$user->getSaldoLibroEUR();
                                            $total = $acumulado + $ganancia;
                                            $totalMovimiento = $total + (float)$user->getSaldoGeneralEUR();
                                            $user->setSaldoLibroEUR($total);
                                        }
                                    } else {
                                        return null;
                                    }
                                    $entityManager->flush();
                                    //actualizar el movimiento de la cuenta en dólares
                                    $movimiento = $this->actualizarMovimiento($entityManager, $totalMovimiento, $moneda, 3, $user, $venta);
                                    if ($movimiento === null) {
                                        return null;
                                    }
                                } else {
                                    return null;
                                }
                            } else {
                                return null;
                            }
                        }
                    } else {
                        return null;
                    }
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function actualizarAmortizacionAdministrador(EntityManagerInterface $entityManager, Request $request, $venta, $userAdmin)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                if ($p['isAmortizacion'] === '1') {
                    $amortizacion = $entityManager->getRepository(ProductoAmortizacion::class)->find($p['idAmortizacion']);
                    if ($amortizacion !== null) {
                        if ($amortizacion->isAdministrador()) {
                            $producto = $entityManager->getRepository(Producto::class)->find($p['idProducto']);
                            if ($producto !== null) {
                                $moneda = $producto->getTipodemoneda();
                                $ganancia = (float)$p['pagoAmortizacion'];
                                $saldoEstadoActual = $entityManager->getRepository(EstadoFondo::class)->ultimoSaldoMovimiento($userAdmin->getId(), $moneda);
                                if (empty($saldoEstadoActual)) {
                                    $saldo = 0;
                                } else {
                                    $saldo = (float)$saldoEstadoActual[0]['saldo'];
                                }
                                $totalMovimiento = $saldo + $ganancia;
                                //actualizar el movimiento de la cuenta
                                $movimiento = $this->actualizarMovimiento($entityManager, $totalMovimiento, $moneda, 3, $userAdmin, $venta);
                                if ($movimiento === null) {
                                    return null;
                                }
                            } else {
                                return null;
                            }
                        }
                    } else {
                        return null;
                    }
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function actualizarMovimiento(EntityManagerInterface $entityManager, $saldo, $tipoMoneda, $accion, $user, $venta)
    {
        try {
            $datetime = new DateTime();
            $movimiento = new EstadoFondo();
            $movimiento->setSaldo($saldo);
            $movimiento->setTipodemoneda($tipoMoneda);
            $movimiento->setFecha($datetime);
            $movimiento->setAccion($accion);
            $movimiento->setUser($user);
            $movimiento->setVenta($venta);
            $entityManager->persist($movimiento);
            $entityManager->flush();
            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function notificarProductosVenta(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer)
    {
        try {
            $productos = $request->get('productos');
            //Para cada producto
            foreach ($productos as $p) {
                $producto = $entityManager->getRepository(Producto::class)->find($p['idProducto']);
                if ($producto !== null) {
                    $mens = "Usted tiene tiene en una venta el producto " . $producto->getNombre() . " en el Sistema de Royalties";
                    if ($producto->getUser() !== null) {
                        $notificar = $this->notificarCorreo($mailer, $mens, $producto->getUser()->getEmail());
                        if ($notificar === null) {
                            return null;
                        }
                    } else {
                        return null;
                    }
                } else {
                    return null;
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    //Funciones que resuelven la cancelación de la venta
    private function obtenerVenta(EntityManagerInterface $entityManager, Request $request)
    {
        try {

            $venta = $entityManager->getRepository(Venta::class)->find($request->get('id'));
            return $venta ?? null;

        } catch (Exception) {
            return null;
        }

    }

    private function registrarNuevoStockProducto(EntityManagerInterface $entityManager, $venta)
    {
        try {
            foreach ($venta->getVentas() as $p) {
                $idPproducto = $p->getProducto()->getId();
                $stock = (int)$p->getProducto()->getStock();
                $cantidad = (int)$p->getCantidad();
                $stockActualizado = $stock + $cantidad;
                $productoStock = $entityManager->getRepository(Producto::class)->find($idPproducto);
                if ($productoStock !== null) {
                    $productoStock->setStock($stockActualizado);
                    $entityManager->flush();
                } else {
                    return null;
                }
            }
            return 'ok';

        } catch (Exception) {
            return null;
        }
    }

    private function actualizarSaldoRoyaltiesUsuario(EntityManagerInterface $entityManager, $venta)
    {
        try {
            foreach ($venta->getVentas() as $p) {
                $codigo = $venta->getCodigo();
                $producto = $p->getProducto();
                $cantidad = (int)$p->getCantidad();
                $tipo = $p->getProducto()->getTipoProducto();
                $moneda = $p->getProducto()->getTipodemoneda();
                $user = $p->getProducto()->getUser()->getId();
                $royalties = $p->getRoyaltie() ?? 0;
                $pagoAmortizacion = $p->getPagoAmortizacion() ?? 0;
                $saldoAfectado = '';
                $totalMovimiento = 0;
                $user = $entityManager->getRepository(User::class)->find($user);
                if ($user !== null) {
                    if ($tipo === 1) {
                        if ($moneda === 'USD') {
                            $acumulado = (float)$user->getSaldoGeneralUSD();
                            $restante = $acumulado - $royalties;
                            $totalMovimiento = $restante + (float)$user->getSaldoLibroUSD();
                            $user->setSaldoGeneralUSD($restante);
                            $saldoAfectado = 'Productos Generales USD';
                        } else {
                            $acumulado = (float)$user->getSaldoGeneralEUR();
                            $restante = $acumulado - $royalties;
                            $totalMovimiento = $restante + (float)$user->getSaldoLibroEUR();
                            $user->setSaldoGeneralEUR($restante);
                            $saldoAfectado = 'Productos Generales EUR';
                        }
                    } elseif ($tipo === 2) {
                        if ($moneda === 'USD') {
                            $acumulado = (float)$user->getSaldoLibroUSD();
                            $restante = $acumulado - $royalties;
                            $totalMovimiento = $restante + (float)$user->getSaldoGeneralUSD();
                            $user->setSaldoLibroUSD($restante);
                            $saldoAfectado = 'Libros USD';
                        } else {
                            $acumulado = (float)$user->getSaldoLibroEUR();
                            $restante = $acumulado - $royalties;
                            $totalMovimiento = $restante + (float)$user->getSaldoGeneralEUR();
                            $user->setSaldoLibroEUR($restante);
                            $saldoAfectado = 'Libros EUR';
                        }
                    }
                    $entityManager->flush();
                    //Registrar la venta cancelada
                    $ventaCancelada = $this->registrarVentaCancelada($entityManager, $codigo, $producto, $royalties, $cantidad, $pagoAmortizacion, $saldoAfectado);
                    if ($ventaCancelada === null) {
                        return null;
                    }
                    //actualizar el movimiento de la cuenta
                    $movimiento = $this->actualizarMovimiento($entityManager, $totalMovimiento, $moneda, 7, $user, $venta);
                    if ($movimiento === null) {
                        return null;
                    }
                } else {
                    return null;
                }
            }
            return 'ok';

        } catch (Exception) {
            return null;
        }
    }

    private function restaurarAmortizacion(EntityManagerInterface $entityManager, $venta)
    {
        try {
            //Para cada producto de la venta
            foreach ($venta->getVentas() as $p) {
                if ($p->getAmortizacion() !== null) {
                    $amortizacion = $entityManager->getRepository(ProductoAmortizacion::class)->find($p->getAmortizacion()->getId());
                    if ($amortizacion !== null) {
                        $pagoAmortizacion = $p->getPagoAmortizacion();
                        $total = $amortizacion->getSaldoRestante() + $pagoAmortizacion;
                        $amortizacion->setSaldoRestante($total);
                        $amortizacion->setIsActive(true);
                        $entityManager->flush();
                    } else {
                        return null;
                    }
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function restaurarSaldoAmortizacionUsuario(EntityManagerInterface $entityManager, $venta)
    {
        try {
            //Para cada producto de la venta
            foreach ($venta->getVentas() as $p) {
                $tipo = $p->getProducto()->getTipoProducto();
                $moneda = $p->getProducto()->getTipodemoneda();
                $user = $p->getProducto()->getUser()->getId();
                if ($p->getAmortizacion() !== null) {
                    $amortizacion = $entityManager->getRepository(ProductoAmortizacion::class)->find($p->getAmortizacion()->getId());
                    if ($amortizacion !== null) {
                        $pagoAmortizacion = $p->getPagoAmortizacion();
                        if (!$amortizacion->isAdministrador()) {
                            $user = $entityManager->getRepository(User::class)->find($user);
                            if ($user !== null) {
                                if ($tipo === 1) {
                                    if ($moneda === 'USD') {
                                        $acumulado = (float)$user->getSaldoGeneralUSD();
                                        $total = $acumulado - $pagoAmortizacion;
                                        $totalMovimiento = $total + (float)$user->getSaldoLibroUSD();
                                        $user->setSaldoGeneralUSD($total);
                                    } else {
                                        $acumulado = (float)$user->getSaldoGeneralEUR();
                                        $total = $acumulado - $pagoAmortizacion;
                                        $totalMovimiento = $total + (float)$user->getSaldoLibroEUR();
                                        $user->setSaldoGeneralEUR($total);
                                    }
                                } else if ($tipo === 2) {
                                    if ($moneda === 'USD') {
                                        $acumulado = (float)$user->getSaldoLibroUSD();
                                        $total = $acumulado - $pagoAmortizacion;
                                        $totalMovimiento = $total + (float)$user->getSaldoGeneralUSD();
                                        $user->setSaldoLibroUSD($total);
                                    } else {
                                        $acumulado = (float)$user->getSaldoLibroEUR();
                                        $total = $acumulado - $pagoAmortizacion;
                                        $totalMovimiento = $total + (float)$user->getSaldoGeneralEUR();
                                        $user->setSaldoLibroEUR($total);
                                    }
                                } else {
                                    return null;
                                }
                                $entityManager->flush();
                                //actualizar el movimiento de la cuenta en dólares
                                $movimiento = $this->actualizarMovimiento($entityManager, $totalMovimiento, $moneda, 8, $user, null);
                                if ($movimiento === null) {
                                    return null;
                                }
                            } else {
                                return null;
                            }
                        }

                    } else {
                        return null;
                    }
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function restaurarSaldoAmortizacionAdministrador(EntityManagerInterface $entityManager, $venta, $userAdmin)
    {
        try {
            //Para cada producto
            foreach ($venta->getVentas() as $p) {
                $moneda = $p->getProducto()->getTipodemoneda();
                if ($p->getAmortizacion() !== null) {
                    $amortizacion = $entityManager->getRepository(ProductoAmortizacion::class)->find($p->getAmortizacion()->getId());
                    if ($amortizacion !== null) {
                        $pagoAmortizacion = $p->getPagoAmortizacion();
                        if ($amortizacion->isAdministrador()) {
                            $saldoEstadoActual = $entityManager->getRepository(EstadoFondo::class)->ultimoSaldoMovimiento($userAdmin->getId(), $moneda);
                            if (empty($saldoEstadoActual)) {
                                $saldo = 0;
                            } else {
                                $saldo = (float)$saldoEstadoActual[0]['saldo'];
                            }
                            $totalMovimiento = $saldo - $pagoAmortizacion;
                            //actualizar el movimiento de la cuenta
                            $movimiento = $this->actualizarMovimiento($entityManager, $totalMovimiento, $moneda, 8, $userAdmin, null);
                            if ($movimiento === null) {
                                return null;
                            }
                        }
                    } else {
                        return null;
                    }
                }
            }

            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function registrarVentaCancelada(EntityManagerInterface $entityManager, $codigo, $producto, $royalties, $cantidad, $pagoAmortizacion, $saldoAfectado)
    {
        try {
            $ventaCancelada = new VentaCancelada();
            $datetime = new DateTime();
            $ventaCancelada->setFecha($datetime);
            $ventaCancelada->setCodigo($codigo);
            $ventaCancelada->setProducto($producto);
            $ventaCancelada->setRoyaltie($royalties);
            $ventaCancelada->setAmortizacion($pagoAmortizacion);
            $ventaCancelada->setSaldoAfectado($saldoAfectado);
            $ventaCancelada->setCantidad($cantidad);

            $entityManager->persist($ventaCancelada);
            $entityManager->flush();
        } catch (Exception) {
            return null;
        }
        return 'ok';
    }

    private function borrarVentaProductos(EntityManagerInterface $entityManager, $venta)
    {
        try {
            foreach ($venta->getVentas() as $p) {
                $entityManager->remove($p);
            }
            $entityManager->flush();
            return 'ok';

        } catch (Exception) {
            return null;
        }
    }

    private function actualizarEstadoFondo(EntityManagerInterface $entityManager, $venta)
    {
        try {
            $cuentas = $entityManager->getRepository(EstadoFondo::class)->findBy(['venta' => $venta]);
            if ($cuentas !== null) {
                foreach ($cuentas as $p) {
                    $p->setVenta(null);
                }
                $entityManager->flush();
                return 'ok';
            }

            return null;

        } catch (Exception) {
            return null;
        }

    }

    private function borrarVenta(EntityManagerInterface $entityManager, $venta)
    {
        try {
            $entityManager->remove($venta);
            $entityManager->flush();
        } catch (Exception) {
            return null;
        }
        return 'ok';
    }

}
