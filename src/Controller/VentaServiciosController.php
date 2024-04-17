<?php

namespace App\Controller;

use App\Entity\Producto;
use App\Entity\User;
use App\Entity\Venta;
use App\Entity\VentaCancelada;
use App\Entity\VentaProducto;
use App\Repository\NotificacionRepository;
use App\Repository\ProductoRepository;
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
 * @Route("/venta_servicios")
 */
class VentaServiciosController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/serv", name="app_venta_servicios_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param VentaRepository $ventaRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function serv(UserRepository $userRepository, VentaRepository $ventaRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();
        $roles = $user->getRoles();

        if ($roles[0] === 'ROLE_USER') {
            $ventasServicios = $ventaRepository->obtenerlasventasdadousers($id);
        } else {
            $ventasServicios = $ventaRepository->obtenerlasventasservicios();
        }

        return $this->render('venta_servicios/index.html.twig', [
            'venta_servicios' => $ventasServicios,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
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
            'vp' => 0,
            'vs' => 1,
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
     * @Route("/new", name="app_venta_servicios_new", methods={"GET", "POST"})
     * @param NotificacionRepository $notificacionRepository
     * @param ProductoRepository $productoRepository
     * @return Response
     */
    public
    function new(NotificacionRepository $notificacionRepository, ProductoRepository $productoRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('venta_servicios/addVentaServicio.html.twig', [
            'servicios' => $productoRepository->todosServicios(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
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
            'vs' => 1,
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
     * @Route("/insert", name="app_venta_servicio_insert", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param MailerInterface $mailer
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function insert(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer): Response
    {

        $entityManager->beginTransaction();

        //Insertar venta
        try {
            $venta = new Venta();
            $venta->setFecha(new DateTime($request->request->get('fecha')));
            $venta->setCodigo($request->request->get('codigo'));

            $entityManager->persist($venta);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la venta');
        }

        try {
            $servicios = $request->request->get('servicios');

            foreach ($servicios as $s) {
                $ventaServicio = new VentaProducto();
                $ventaServicio->setRoyaltie($s['royalties']);
                $ventaServicio->setVenta($venta);
                $servicio = $entityManager->getRepository(Producto::class)->find($s['idServicio']);

                if ($servicio !== null) {
                    $ventaServicio->setProducto($servicio);
                    $entityManager->persist($ventaServicio);
                    $entityManager->flush();
                    $moneda = $servicio->getTipodemoneda();
                } else {
                    $entityManager->rollback();
                    return new Response('Error solicitando el servicio de la venta ');
                }
                $mens = "Usted tiene una venta del servicio " . $servicio->getNombre() . " en el Sistema de Royalties";
                $email = (new TemplatedEmail())
                    ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                    ->to($servicio->getUser()->getEmail())
                    ->subject('Notificación del Sistema de Royalties')
                    ->htmlTemplate('correo/plantillaCorreo.html.twig')

                    // pass variables (name => value) to the template
                    ->context([
                        'mensaje' => $mens
                    ]);

                $mailer->send($email);
                //Actualizar la ganancia del usuario
                $user = $entityManager->getRepository(User::class)->find($s['idUsuario']);
                if ($user !== null) {
                    if ($moneda === 'USD') {
                        $acumulado = (float)$user->getSaldoServicioUSD();
                        $aumento = $acumulado + (float)$s['royalties'];
                        $user->setSaldoServicioUSD($aumento);
                    } else {
                        $acumulado = (float)$user->getSaldoServicioEUR();
                        $aumento = $acumulado + (float)$s['royalties'];
                        $user->setSaldoServicioEUR($aumento);
                    }

                    $entityManager->persist($user);
                    $entityManager->flush();
                } else {
                    $entityManager->rollback();
                    return new Response('Error actualizando el royaltie del usuario');
                }
            }
            $entityManager->persist($venta);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando los servicios de la venta');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/{id}", name="app_venta_servicios_show", methods={"GET"})
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
        $id = $user->getId();

        return $this->render('venta_servicios/show.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12', '13')))),
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
            'vp' => 0,
            'royaltiesp' => 0,
            'vs' => 1,
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
     * @Route("/delete", name="app_venta_servicios_delete", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function delete(EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->beginTransaction();

        $venta = $entityManager->getRepository(Venta::class)->find($request->get('id'));
        if ($venta !== null) {
            $codigo = $venta->getCodigo();
            foreach ($venta->getVentas() as $p) {
                $producto = $p->getProducto();
                $idPproducto = $p->getProducto()->getId();
                $cantidad = (int)$p->getCantidad();
                $tipo = $p->getProducto()->getTipoProducto();
                $moneda = $p->getProducto()->getTipodemoneda();
                $user = $p->getProducto()->getUser()->getId();
                $royalties = (float)$p->getRoyaltie();
                $saldoAfectado = '';

                //Actualizar el saldo del usuario
                $user = $entityManager->getRepository(User::class)->find($user);
                if ($user !== null) {
                    if ($tipo === '3') {
                        if ($moneda === 'USD') {
                            $acumulado = (float)$user->getSaldoServicioUSD();
                            $restante = $acumulado - $royalties;
                            $user->setSaldoServicioUSD($restante);
                            $saldoAfectado = 'Servicios USD';
                        } else {
                            $acumulado = (float)$user->getSaldoServicioEUR();
                            $restante = $acumulado - $royalties;
                            $user->setSaldoServicioEUR($restante);
                            $saldoAfectado = 'Servicios EUR';
                        }
                    }
                    $entityManager->persist($user);
                    $entityManager->flush();
                } else {
                    $entityManager->rollback();
                    return new Response('Error actualizando el royaltie del usuario');
                }
                //Insertar venta cancelada
                try {
                    $ventaCancelada = new VentaCancelada();
                    $datetime = new DateTime();
                    $ventaCancelada->setFecha($datetime);
                    $ventaCancelada->setCodigo($codigo);
                    $ventaCancelada->setProducto($producto);
                    $ventaCancelada->setRoyaltie($royalties);
                    $ventaCancelada->setSaldoAfectado($saldoAfectado);
                    $ventaCancelada->setCantidad($cantidad);

                    $entityManager->persist($ventaCancelada);
                    $entityManager->flush();
                } catch (Exception) {
                    $entityManager->rollback();
                    return new Response('Error registrando la venta cancelada');
                }
            }

            //Borrar los productos dela venta
            $productos = $entityManager->getRepository(VentaProducto::class)->findOneBy(['venta' => $venta->getId(), 'producto' => $idPproducto]);
            if ($productos !== null) {
                $entityManager->remove($productos);
                $entityManager->flush();
            } else {
                $entityManager->rollback();
                return new Response('Error borrando los servicios de la venta');
            }

            //Borrando la venta
            try {
                $entityManager->remove($venta);
                $entityManager->flush();
            } catch (Exception) {
                $entityManager->rollback();
                return new Response('Error borrando la venta');
            }
        } else {
            $entityManager->rollback();
            return new Response('Error localizando la venta');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');

    }

}
