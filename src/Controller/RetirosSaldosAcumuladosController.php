<?php

namespace App\Controller;

use App\Entity\EstadoFondo;
use App\Entity\Notificacion;
use App\Entity\RetiroSaldo;
use App\Entity\User;
use App\Repository\NotificacionRepository;
use App\Repository\SolicitarPagoRoyalAcumuladoRepository;
use App\Repository\TipoNotificacionRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
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
 * @Route("/retiros/saldos/acumulados")
 */
class RetirosSaldosAcumuladosController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_retiros_saldos_acumulados", methods={"GET"})
     * @param SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository, UserRepository $userRepository, NotificacionRepository $notificacionRepository): Response
    {

        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        $acumulado = $userRepository->totalAcumulado();
        $pagosAcumulados = $solicitarPagoRoyalAcumuladoRepository->findAll();
        $bolsaGeneralDolar = $acumulado[0]['saldoGeneralUSD'];
        $bolsaGeneralEuros = $acumulado[0]['saldoGeneralEUR'];
        $bolsaLibroDolar = $acumulado[0]['saldoLibroUSD'];
        $bolsaLibroEuros = $acumulado[0]['saldoLibroEUR'];
        $bolsaServicioDolar = $acumulado[0]['saldoServicioUSD'];
        $bolsaServicioEuros = $acumulado[0]['saldoServicioEUR'];

        return $this->render('retiros_saldos_acumulados/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'solicitar_pago_royal_acumulados' => $pagosAcumulados,
            'bolsaGeneralDolar' => $bolsaGeneralDolar,
            'bolsaGeneralEuros' => $bolsaGeneralEuros,
            'bolsaLibroDolar' => $bolsaLibroDolar,
            'bolsaLibroEuros' => $bolsaLibroEuros,
            'bolsaServicioDolar' => $bolsaServicioDolar,
            'bolsaServicioEuros' => $bolsaServicioEuros,
            'users' => $userRepository->findAll(),
            'acumulados' => $userRepository->saldosUsuarios(),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
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
            'royaltiesp' => 0,
            'retir' => 1,
            'hist' => 0,
            'vp' => 0,
            'asignars' => 0,
            'vs' => 0,
            'mensaje' => 0,
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
     * @Route("/newFicheroRetiro", name="app_fichero_retiro", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function newFicheroRetiro(Request $request): Response
    {

        $file = $request->files->get('uploadDocumentoRetiro');
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
     * @Route("/new", name="app_retiro_saldo_acumulado_new", options={"expose"=true}, methods={"GET", "POST"})
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
                return new Response('Error localizando al usuario que se le quiere retirar el saldo');
            }

            //Registrar retiro de saldo
            $retiroSaldo = $this->registrarRetiroSaldo($entityManager, $request, $user);

            if ($retiroSaldo === null) {
                $entityManager->rollback();
                return new Response('Error registrando el retiro de royalties');
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

            //Notificación del sistema de retiro de saldo
            $notificacion = $this->notificacionRetiroSaldo($entityManager, $user, $retiroSaldo);

            if ($notificacion === null) {
                $entityManager->rollback();
                return new Response('Error enviando la notificación de sistema');
            }

            //notificar por el correo al administrador producto agotado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>10]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le retiro " . $retiroSaldo->getCantidad() . " en el Sistema de Royalties";
            }
            $notificarCorreo = $this->notificarCorreo($mailer, $retiroSaldo, $user->getEmail(),$mensaje);
            if ($notificarCorreo === null) {
                return new Response('Error enviando correo al usuario');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando el retiro de saldo');
        }

    }

    private function obtenerUsuario(EntityManagerInterface $entityManager, Request $request)
    {
        $user = $entityManager->getRepository(User::class)->find($request->get('idUsuario'));
        return $user ?? null;
    }

    private function registrarRetiroSaldo(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
            $retiroSaldo = new RetiroSaldo();
            $datetime = new DateTime();
            $retiroSaldo->setFecha($datetime);
            $retiroSaldo->setCantidad((float)$request->get('royaltie'));
            $retiroSaldo->setTipoSaldo($request->get('tipoSaldo'));
            $retiroSaldo->setMotivo($request->get('motivo'));
            $retiroSaldo->setDocumento($request->get('fichero'));
            $retiroSaldo->setUser($user);
            $entityManager->persist($retiroSaldo);
            $entityManager->flush();
            return $retiroSaldo;

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
                $saldo = (float) $user->getSaldoGeneralUSD() + (float) $user->getSaldoLibroUSD() + (float) $user->getSaldoServicioUSD() - (float)$royaltie;
            }else {
                $tipoMoneda = 'EUR';
                $saldo = (float) $user->getSaldoGeneralEUR() + (float) $user->getSaldoLibroEUR() + (float) $user->getSaldoServicioEUR() - (float)$royaltie;
            }
            $datetime = new DateTime();
            $movimiento = new EstadoFondo();
            $movimiento->setSaldo($saldo);
            $movimiento->setTipodemoneda($tipoMoneda);
            $movimiento->setFecha($datetime);
            $movimiento->setAccion(2);
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
            $restante = (float)$saldoAcumulado - (float)$royaltie;
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

    private function notificacionRetiroSaldo(EntityManagerInterface $entityManager, $user, $retiroSaldo)
    {
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo(10);
            $notificacion->setRetiroSaldo($retiroSaldo);
            $notificacion->setUser($user);
            $entityManager->persist($notificacion);
            $entityManager->flush();
            return $notificacion;

        } catch (Exception) {
            return null;
        }

    }

    private function notificarCorreo(MailerInterface $mailer, $retiroSaldo, $correo, $mensaje)
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
