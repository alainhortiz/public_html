<?php

namespace App\Controller;

use App\Entity\EstadoFondo;
use App\Entity\IngresoSaldo;
use App\Entity\Notificacion;
use App\Entity\User;
use App\Repository\IngresoSaldoRepository;
use App\Repository\NotificacionRepository;
use App\Repository\TipoNotificacionRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ingresos/saldos")
 */
class IngresosSaldosController extends AbstractController
{
    /**
     * @Route("/", name="app_ingreso_saldo_index", methods={"GET"})
     * @param IngresoSaldoRepository $ingresoSaldoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(IngresoSaldoRepository $ingresoSaldoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();
        $roles = $user->getRoles();

        if ($roles[0] === 'ROLE_ADMIN') {
            $ingresos = $ingresoSaldoRepository->findAll();
        } else {
            $ingresos = $ingresoSaldoRepository->findBy(array('user' => $user));
        }

        return $this->render('historial_ingreso_saldo/index.html.twig', [
            'ingresos' => $ingresos,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
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
            'hist' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'mensaje' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 1,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/newFicheroIngreso", name="app_fichero_ingreso", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function newFicheroIngreso(Request $request): Response
    {

        $file = $request->files->get('uploadDocumentoIngreso');
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
     * @Route("/new", name="app_ingreso_saldo_acumulado_new", options={"expose"=true}, methods={"GET", "POST"})
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
                return new Response('Error localizando al usuario que se le quiere ingresar el saldo');
            }

            //Registrar ingreso de saldo
            $ingresoSaldo = $this->registrarIngresoSaldo($entityManager, $request, $user);

            if ($ingresoSaldo === null) {
                $entityManager->rollback();
                return new Response('Error registrando el ingreso de royalties');
            }

            //Registrar movimiento de estado de cuenta
            $movimiento = $this->registrarMovimiento($entityManager, $request, $user);

            if ($movimiento === null) {
                $entityManager->rollback();
                return new Response('Error registrando el movimiento en el estado de cuenta');
            }

            //Actualizar saldo del usuario
            $saldoUsuario = $this->actualizarSaldoUsuario($entityManager, $request, $user);

            if ($saldoUsuario === null) {
                $entityManager->rollback();
                return new Response('Error actualizando la cuenta del usuario');
            }

            //Notificación del sistema de ingreso de saldo
            $notificacion = $this->notificacionIngresoSaldo($entityManager, $user, $ingresoSaldo);

            if ($notificacion === null) {
                $entityManager->rollback();
                return new Response('Error enviando la notificación de sistema');
            }

            //notificar por el correo al administrador producto agotado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>13]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le ingreso " . $ingresoSaldo->getCantidad() . " en el Sistema de Royalties";
            }
            $notificarCorreo = $this->notificarCorreo($mailer, $ingresoSaldo, $user->getEmail(), $mensaje);
            if ($notificarCorreo === null) {
                return new Response('Error enviando correo al usuario');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception $e) {
            $entityManager->rollback();
            return new Response('Error registrando el ingreso de saldo');
        }
    }

    private function obtenerUsuario(EntityManagerInterface $entityManager, Request $request)
    {
        $user = $entityManager->getRepository(User::class)->find($request->get('idUsuario'));
        return $user ?? null;
    }

    private function registrarIngresoSaldo(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
            $datetime = new DateTime();
            $ingresoSaldo = new IngresoSaldo();
            $ingresoSaldo->setFecha($datetime);
            $ingresoSaldo->setCantidad((float)$request->get('royaltie'));
            $ingresoSaldo->setMotivo($request->get('motivo'));
            $ingresoSaldo->setTipoSaldo($request->get('tipoSaldo'));
            $ingresoSaldo->setDocumento($request->get('fichero'));
            $ingresoSaldo->setUser($user);
            $entityManager->persist($ingresoSaldo);
            $entityManager->flush();
            return $ingresoSaldo;
        } catch (Exception) {
            return null;
        }

    }

    private function registrarMovimiento(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
            $tipoSaldo = $request->get('tipoSaldo');
            $royaltie = $request->get('royaltie');
            if ($tipoSaldo === '1' || $tipoSaldo === '3' || $tipoSaldo === '5') {
                $tipoMoneda = 'USD';
                $saldo = (float)$user->getSaldoGeneralUSD() + (float)$user->getSaldoLibroUSD() + (float)$user->getSaldoServicioUSD() + (float)$royaltie;
            } else {
                $tipoMoneda = 'EUR';
                $saldo = (float)$user->getSaldoGeneralEUR() + (float)$user->getSaldoLibroEUR() + (float)$user->getSaldoServicioEUR() + (float)$royaltie;
            }
            $datetime = new DateTime();
            $movimiento = new EstadoFondo();
            $movimiento->setSaldo($saldo);
            $movimiento->setTipodemoneda($tipoMoneda);
            $movimiento->setFecha($datetime);
            $movimiento->setAccion(1);
            $movimiento->setUser($user);
            $entityManager->persist($movimiento);
            $entityManager->flush();
            return $movimiento;

        } catch (Exception) {
            return null;
        }

    }

    private function actualizarSaldoUsuario(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
            $tipoSaldo = $request->get('tipoSaldo');
            $saldoAcumulado = (float)$request->get('saldoAcumulado');
            $royaltie = $request->get('royaltie');
            $restante = (float)$saldoAcumulado + (float)$royaltie;
            switch ($tipoSaldo) {
                case 1:
                    $user->setSaldoGeneralUSD($restante);
                    break;
                case 2:
                    $user->setSaldoGeneralEUR($restante);
                    break;
                case 3:
                    $user->setSaldoLibroUSD($restante);
                    break;
                case 4:
                    $user->setSaldoLibroEUR($restante);
                    break;
                case 5:
                    $user->setSaldoServicioUSD($restante);
                    break;
                case 6:
                    $user->setSaldoServicioEUR($restante);
                    break;
            }
            $entityManager->flush();
            return $user;

        } catch (Exception) {
            return null;
        }

    }

    private function notificacionIngresoSaldo(EntityManagerInterface $entityManager, $user, $ingresoSaldo)
    {
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo(13);
            $notificacion->setIngresoSaldo($ingresoSaldo);
            $notificacion->setUser($user);
            $entityManager->persist($notificacion);
            $entityManager->flush();
            return $notificacion;

        } catch (Exception) {
            return null;
        }

    }

    private function notificarCorreo(MailerInterface $mailer, $ingresoSaldo, $correo, $mensaje)
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

}
