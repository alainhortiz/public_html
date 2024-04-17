<?php

namespace App\Controller;

use App\Entity\Bizum;
use App\Entity\Notificacion;
use App\Entity\Paypal;
use App\Entity\SolicitarPagoRoyalAcumulado;
use App\Entity\TransferenciaBancaria;
use App\Entity\User;
use App\Entity\Westerunion;
use App\Form\SolicitarPagoRoyalAcumuladoType;
use App\Repository\BizumRepository;
use App\Repository\EmpresaRepository;
use App\Repository\NotificacionRepository;
use App\Repository\PaypalRepository;
use App\Repository\ProductoRepository;
use App\Repository\SolicitarPagoRoyalAcumuladoRepository;
use App\Repository\TipoNotificacionRepository;
use App\Repository\TransferenciaBancariaRepository;
use App\Repository\UserRepository;
use App\Repository\WesterunionRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
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
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/solicitarpago_royalacumulado")
 */
class SolicitarPagoRoyalAcumuladoController extends AbstractController
{
    /**
     * @Route("/", name="app_solicitar_pago_royal_acumulado_index", methods={"GET"})
     * @param Request $request
     * @param UserRepository $userRepository
     * @param SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository
     * @param NotificacionRepository $notificacionRepository
     * @param EmpresaRepository $empresaRepository
     * @param WesterunionRepository $westerunionRepository
     * @param PaypalRepository $paypalRepository
     * @param BizumRepository $bizumRepository
     * @param TransferenciaBancariaRepository $transferenciaBancariaRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository, NotificacionRepository $notificacionRepository, EmpresaRepository $empresaRepository, WesterunionRepository $westerunionRepository, PaypalRepository $paypalRepository, BizumRepository $bizumRepository, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();
        $roles = $user->getRoles();

        if ($roles[0] === 'ROLE_ADMIN') {
            $acumulado = $userRepository->totalAcumulado();
            $pagosAcumulados = $solicitarPagoRoyalAcumuladoRepository->findAll();
            $metodos = SolicitarPagoRoyalAcumulado::METODO_PAGO;
        } else {
            $acumulado = $userRepository->totalAcumuladoUser($id);
            $pagosAcumulados = $solicitarPagoRoyalAcumuladoRepository->findBy(array('user' => $user));
            $westerUnion = $westerunionRepository->findOneBy(array('user' => $user));
            $paypal = $paypalRepository->findOneBy(array('user' => $user));
            $bizum = $bizumRepository->findOneBy(array('user' => $user));
            $transferencia = $transferenciaBancariaRepository->findOneBy(array('user' => $user));
            $metodos = [];
            if ($westerUnion !== null) {
                $metodos['WesterUnion'] = 'WesterUnion';
            }
            if ($paypal !== null) {
                $metodos['Paypal'] = 'Paypal';
            }
            if ($bizum !== null) {
                $metodos['Bizum'] = 'Bizum';
            }
            if ($transferencia !== null) {
                $metodos['Transferencia'] = 'Transferencia';
            }
            $metodos['Efectivo'] = 'Efectivo';
            $metodos['Voucher'] = 'Voucher';
        }
        $bolsaGeneralDolar = $acumulado[0]['saldoGeneralUSD'];
        $bolsaGeneralEuros = $acumulado[0]['saldoGeneralEUR'];
        $bolsaLibroDolar = $acumulado[0]['saldoLibroUSD'];
        $bolsaLibroEuros = $acumulado[0]['saldoLibroEUR'];
        $bolsaServicioDolar = $acumulado[0]['saldoServicioUSD'];
        $bolsaServicioEuros = $acumulado[0]['saldoServicioEUR'];

        // creates a task object and initializes some data for this example
        $solicitarPagoRoyalAcumulado = new SolicitarPagoRoyalAcumulado();
        $solicitarPagoRoyalAcumulado->setEstado(false);

        return $this->render('solicitar_pago_royal_acumulado/index.html.twig', [
            'allUsers' => $userRepository->findAll(),
            'solicitar_pago_royal_acumulados' => $pagosAcumulados,
            'empresa' => $empresaRepository->findAll(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'bolsaGeneralDolar' => $bolsaGeneralDolar,
            'bolsaGeneralEuros' => $bolsaGeneralEuros,
            'bolsaLibroDolar' => $bolsaLibroDolar,
            'bolsaLibroEuros' => $bolsaLibroEuros,
            'bolsaServicioDolar' => $bolsaServicioDolar,
            'bolsaServicioEuros' => $bolsaServicioEuros,
            'metodos' => $metodos,
            'totalacumulado' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'royaltiesp' => 1,
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
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/newFichero", name="app_solicitar_pago_royal_acumulado_fichero", options={"expose"=true}, methods={"GET", "POST"})
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
     * @Route("/newAdjunto", name="app_solicitar_pago_royal_acumulado_adjunto", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @return Response
     */
    public function newAdjunto(Request $request): Response
    {

        $file = $request->files->get('uploadAdjunto');
        $status = array('status' => "success", "fileUploaded" => false);

        // Move the file to the directory where brochures are stored
        try {
            // If a file was uploaded
            if (!is_null($file)) {
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
     * @Route("/new", name="app_solicitar_pago_royal_acumulado_new", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param UserRepository $userRepository
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function new(EntityManagerInterface $entityManager, Request $request, UserRepository $userRepository, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        $usuario = $this->getUser();
        if ($usuario !== null) {
            $user = $entityManager->getRepository(User::class)->find($usuario->getId());
            if ($user === null) {
                return new Response('Error localizando al usuario');
            }
        } else {
            return new Response('Error localizando al usuario');
        }

        $nombre = $user->getNombre() . ' ' . $user->getApellidos();

        $file = $request->request->get('fichero');
        $royaltie = $request->request->get('royaltie');
        $metodo = $request->request->get('metodo');
        $tipoPago = $request->request->get('tipoPago');
        $saldoAcumulado = $request->request->get('saldoAcumulado');

        //Validaciones
        if ($royaltie > $saldoAcumulado) {
            return new Response('Insuficiente royalties acumulados');
        }

        $restante = (float)$saldoAcumulado - (float)$royaltie;

        $solicitarPagoRoyalAcumulado = new SolicitarPagoRoyalAcumulado();
        $notificacion = new Notificacion();

        $entityManager->beginTransaction();

        //Insertar la solicitud de pago
        try {
            $datetime = new DateTime();
            $solicitarPagoRoyalAcumulado->setFecha($datetime);
            $solicitarPagoRoyalAcumulado->setEstado(false);
            $solicitarPagoRoyalAcumulado->setRoyaltiespagar((float)$royaltie);
            $solicitarPagoRoyalAcumulado->setUser($user);
            $solicitarPagoRoyalAcumulado->setTipoPago($tipoPago);
            $solicitarPagoRoyalAcumulado->setMetododepago($metodo);
            if ($file !== null) {
                $solicitarPagoRoyalAcumulado->setFactura($file);
            }
            switch ($metodo) {
                case 'WesterUnion':
                    $westerUnion = $entityManager->getRepository(Westerunion::class)->findOneBy(array('user' => $user));
                    $solicitarPagoRoyalAcumulado->setWesterunion($westerUnion);
                    break;
                case 'Paypal':
                    $paypal = $entityManager->getRepository(Paypal::class)->findOneBy(array('user' => $user));
                    $solicitarPagoRoyalAcumulado->setPaypal($paypal);
                    break;
                case 'Bizum':
                    $bizum = $entityManager->getRepository(Bizum::class)->findOneBy(array('user' => $user));
                    $solicitarPagoRoyalAcumulado->setBizum($bizum);
                    break;
                case 'Transferencia':
                    $transferencia = $entityManager->getRepository(TransferenciaBancaria::class)->findOneBy(array('user' => $user));
                    $solicitarPagoRoyalAcumulado->setTransferenciaBancaria($transferencia);
                    break;
            }
            $entityManager->persist($solicitarPagoRoyalAcumulado);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error enviando la solicitud');
        }

        //Actualizar el total acumulado del usuario
        try {
            switch ($tipoPago) {
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
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error actualizando los royalties acumulados');
        }

        //Insertar la notificacion de tipo solicitud de pago
        try {
            $datetime = new DateTime();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo(3);
            $notificacion->setSolicitudPago($solicitarPagoRoyalAcumulado);
            $notificacion->setUser($user);
            $entityManager->persist($notificacion);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error enviando la notificación');
        }

        try {
            //notificar por el correo al administrador producto agotado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>3]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "Usted tiene una solicitud de pago del usuario " . $nombre . " en el Sistema de Royalties";
            }
            $correoAdmin = $userRepository->correoAdmin();
            if ($correoAdmin !== null) {
                //mail de solicitud de pago
                $email = (new TemplatedEmail())
                    ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                    ->to($correoAdmin[0]->getEmail())
                    ->subject('Notificación del Sistema de Royalties')
                    ->htmlTemplate('correo/plantillaCorreo.html.twig')

                    // pass variables (name => value) to the template
                    ->context([
                        'mensaje' => $mensaje
                    ]);

                $mailer->send($email);
            }
        } catch (Exception) {
            $entityManager->commit();
            return new Response('ok');
        }


        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/{id}", name="app_solicitar_pago_royal_acumulado_show", methods={"GET"})
     * @param SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public
    function show(SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado, NotificacionRepository $notificacionRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('solicitar_pago_royal_acumulado/show.html.twig', [
            'solicitar_pago_royal_acumulado' => $solicitarPagoRoyalAcumulado,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'royaltiesacum' => 0,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'royaltiesp' => 1,
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
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_solicitar_pago_royal_acumulado_edit", methods={"GET", "POST"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param SolicitarPagoRoyalAcumuladoRepository $pagoRoyalAcumuladoRepository
     * @param Request $request
     * @param SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado
     * @param SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public
    function edit(UserRepository $userRepository, ProductoRepository $productoRepository, SolicitarPagoRoyalAcumuladoRepository $pagoRoyalAcumuladoRepository, Request $request, SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository): Response
    {
        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);
        $form = $this->createForm(SolicitarPagoRoyalAcumuladoType::class, $solicitarPagoRoyalAcumulado);
        $form->handleRequest($request);
        $saldo = $productoRepository->totalusd($id[0]['id'])[0][1] + $productoRepository->totaleuros($id[0]['id'])[0][1];
        $restar = $pagoRoyalAcumuladoRepository->obtenerroyalapagar();

        if (count($restar) > 0) {
            $saldofinal = $saldo - $restar[0]['royaltiespagar'];
        } else {
            $saldofinal = $saldo - 0;
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $datetime = new DateTime();

            $solicitarPagoRoyalAcumulado->setFecha($datetime);
            $solicitarPagoRoyalAcumuladoRepository->add($solicitarPagoRoyalAcumulado);
            return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('solicitar_pago_royal_acumulado/edit.html.twig', [
            'solicitar_pago_royal_acumulado' => $solicitarPagoRoyalAcumulado,
            'form' => $form,
            'saldo' => $saldofinal
        ]);
    }

    /**
     * @Route("/{id}", name="app_solicitar_pago_royal_acumulado_delete", methods={"POST"})
     * @param Request $request
     * @param SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado
     * @param SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository
     * @param EntityManagerInterface $entityManager
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public
    function delete(Request $request, SolicitarPagoRoyalAcumulado $solicitarPagoRoyalAcumulado, SolicitarPagoRoyalAcumuladoRepository $solicitarPagoRoyalAcumuladoRepository, EntityManagerInterface $entityManager, NotificacionRepository $notificacionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $solicitarPagoRoyalAcumulado->getId(), $request->request->get('_token'))) {

            $entityManager->beginTransaction();
            //Actualizar el total acumulado del usuario
            try {
                $usuario = $entityManager->getRepository(User::class)->find($solicitarPagoRoyalAcumulado->getUser()->getId());
                if ($usuario !== null) {
                    switch ($solicitarPagoRoyalAcumulado->getTipoPago()) {
                        case 1:
                            $usuario->setSaldoGeneralUSD((float)$usuario->getSaldoGeneralUSD() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                            break;
                        case 2:
                            $usuario->setSaldoGeneralEUR((float)$usuario->getSaldoGeneralEUR() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                            break;
                        case 3:
                            $usuario->setSaldoLibroUSD((float)$usuario->getSaldoLibroUSD() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                            break;
                        case 4:
                            $usuario->setSaldoLibroEUR((float)$usuario->getSaldoLibroEUR() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                            break;
                        case 5:
                            $usuario->setSaldoServicioUSD((float)$usuario->getSaldoServicioUSD() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                            break;
                        case 6:
                            $usuario->setSaldoServicioEUR((float)$usuario->getSaldoServicioEUR() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                            break;
                    }
                    $entityManager->flush();
                }
            } catch (Exception) {
                $entityManager->rollback();
                return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index', ['mensaje' => 'Error actualizando los royalties acumulados'], Response::HTTP_SEE_OTHER);
            }

            //Borrar la notificacion
            try {
                $notificacion = $entityManager->getRepository(Notificacion::class)->findOneBy(array('solicitudPago' => $solicitarPagoRoyalAcumulado));
                if ($notificacion !== null) {
                    $notificacionRepository->remove($notificacion);
                }
            } catch (Exception) {
                $entityManager->rollback();
                return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index', ['mensaje' => 'Error borrando la notificación'], Response::HTTP_SEE_OTHER);
            }

            //Borrar la solicitud
            $solicitarPagoRoyalAcumuladoRepository->remove($solicitarPagoRoyalAcumulado);

            //Persistiendo en todas las entidades
            $entityManager->commit();
        }

        return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index', ['mensaje' => 'Solicitud borrada'], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/rechazo/aprobar", name="app_solicitar_pago_royal_acumulado_aprobar", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public
    function aprobar(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        $entityManager->beginTransaction();

        $file = $request->get('fichero');
        $info = $request->get('info');

        //Actualizar el estado de la solicitud
        try {
            $solicitarPagoRoyalAcumulado = $entityManager->getRepository(SolicitarPagoRoyalAcumulado::class)->find($request->get('idSolicitud'));
            if ($solicitarPagoRoyalAcumulado !== null) {
                $solicitarPagoRoyalAcumulado->setEstado(1);
                if ($file !== null) {
                    $solicitarPagoRoyalAcumulado->setDocumentoAprobacion($file);
                }
                if ($info !== null) {
                    $solicitarPagoRoyalAcumulado->setInfo($info);
                }
                $entityManager->flush();
            } else {
                $entityManager->rollback();
                return new Response('Error actualizando el estado de la solicitud de pago');
            }

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error actualizando el estado de la solicitud de pago');
        }

        //Cambiar la notificacion de pago realizado
        try {
            $notificacion = $entityManager->getRepository(Notificacion::class)->findOneBy(array('solicitudPago' => $solicitarPagoRoyalAcumulado));
            $datetime = new DateTime();
            if ($notificacion !== null) {
                $notificacion->setFecha($datetime);
                $notificacion->setEstado(false);
                $notificacion->setTipo(4);
                $entityManager->flush();
            } else {
                $entityManager->rollback();
                return new Response('Error actualizando la notificación de solicitud de pago');
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error actualizando la notificación de solicitud de pago');
        }

        try {
            //mail de solicitud de pago aprobado
            //notificar por el correo al administrador producto agotado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>4]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le aprobó una solicitud de pago en el Sistema de Royalties";
            }
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($solicitarPagoRoyalAcumulado->getUser()->getEmail())
                ->subject('Notificación del Sistema de Royalties')
                ->htmlTemplate('correo/plantillaCorreo.html.twig')

                // pass variables (name => value) to the template
                ->context([
                    'mensaje' => $mensaje
                ]);

            $mailer->send($email);
        } catch (Exception) {
            $entityManager->commit();
            return new Response('ok');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/rechazo/denegar", name="app_solicitar_pago_royal_acumulado_rechazar", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public
    function rechazar(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        $entityManager->beginTransaction();

        //Actualizar el estado de la solicitud
        try {
            $solicitarPagoRoyalAcumulado = $entityManager->getRepository(SolicitarPagoRoyalAcumulado::class)->find($request->request->get('idSolicitud'));
            if ($solicitarPagoRoyalAcumulado !== null) {
                $solicitarPagoRoyalAcumulado->setEstado(2);
                $solicitarPagoRoyalAcumulado->setMotivoRechazo($request->request->get('motivo'));
                $entityManager->flush();
            } else {
                $entityManager->rollback();
                return new Response('Error actualizando el estado de la solicitud de pago');
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error actualizando el estado de la solicitud de pago');
        }

        //Actualizar el total acumulado del usuario
        try {
            $usuario = $entityManager->getRepository(User::class)->find($solicitarPagoRoyalAcumulado->getUser()->getId());
            if ($usuario !== null) {
                switch ($solicitarPagoRoyalAcumulado->getTipoPago()) {
                    case 1:
                        $usuario->setSaldoGeneralUSD((float)$usuario->getSaldoGeneralUSD() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                        break;
                    case 2:
                        $usuario->setSaldoGeneralEUR((float)$usuario->getSaldoGeneralEUR() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                        break;
                    case 3:
                        $usuario->setSaldoLibroUSD((float)$usuario->getSaldoLibroUSD() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                        break;
                    case 4:
                        $usuario->setSaldoLibroEUR((float)$usuario->getSaldoLibroEUR() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                        break;
                    case 5:
                        $usuario->setSaldoServicioUSD((float)$usuario->getSaldoServicioUSD() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                        break;
                    case 6:
                        $usuario->setSaldoServicioEUR((float)$usuario->getSaldoServicioEUR() + (float)$solicitarPagoRoyalAcumulado->getRoyaltiespagar());
                        break;
                }
                $entityManager->flush();
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error actualizando los royalties acumulados del usuario');
        }

        //Cambiar el estado de la notificacion
        try {
            $notificacion = $entityManager->getRepository(Notificacion::class)->findOneBy(array('solicitudPago' => $solicitarPagoRoyalAcumulado));
            if ($notificacion !== null) {
                $datetime = new DateTime();
                $notificacion->setFecha($datetime);
                $notificacion->setEstado(false);
                $notificacion->setTipo(5);
                $entityManager->flush();
            } else {
                $entityManager->rollback();
                return new Response('Error actualizando la notificación de solicitud de pago');
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error actualizando la notificación de solicitud de pago');
        }

        try {
            //mail de solicitud de pago rechazado
            //notificar por el correo al administrador producto agotado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>5]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le rechazó una solicitud de pago en el Sistema de Royalties";
            }
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($solicitarPagoRoyalAcumulado->getUser()->getEmail())
                ->subject('Notificación del Sistema de Royalties')
                ->htmlTemplate('correo/plantillaCorreo.html.twig')

                // pass variables (name => value) to the template
                ->context([
                    'mensaje' => $mensaje
                ]);

            $mailer->send($email);
        } catch (Exception) {
            $entityManager->commit();
            return new Response('ok');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }


}
