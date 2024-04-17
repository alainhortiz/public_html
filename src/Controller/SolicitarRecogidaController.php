<?php

namespace App\Controller;

use App\Entity\DireccionRecogida;
use App\Entity\Notificacion;
use App\Entity\SolicitarRecogida;
use App\Entity\User;
use App\Repository\DireccionRecogidaRepository;
use App\Repository\NotificacionRepository;
use App\Repository\SolicitarRecogidaRepository;
use App\Repository\TipoNotificacionRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/solicitar_recogida")
 */
class SolicitarRecogidaController extends AbstractController
{
    /**
     * @Route("/", name="app_solicitar_recogida_index", methods={"GET"})
     * @param SolicitarRecogidaRepository $solicitarRecogidaRepository
     * @param NotificacionRepository $notificacionRepository
     * @param DireccionRecogidaRepository $direccionRecogidaRepository
     * @return Response
     */
    public function index(SolicitarRecogidaRepository $solicitarRecogidaRepository, NotificacionRepository $notificacionRepository, DireccionRecogidaRepository $direccionRecogidaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();
        $roles = $user->getRoles();

        if ($roles[0] === 'ROLE_ADMIN') {
            $recogidas = $solicitarRecogidaRepository->findAll();
        } else {
            $recogidas = $solicitarRecogidaRepository->findBy(array('user' => $user));
        }

        return $this->render('solicitar_recogida/index.html.twig', [
            'solicitar_recogidas' => $recogidas,
            'direccion' => $direccionRecogidaRepository->findOneBy(array('user' => $user)),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 1,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'royaltiesp' => 0,
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
     * @Route("/insert", name="app_solicitar_recogida_insert", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param MailerInterface $mailer
     * @param UserRepository $userRepository
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     */
    public function insert(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer, UserRepository $userRepository, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {

        $entityManager->beginTransaction();
        try {
            //obtener el usuario
            $user = $this->obtenerUsuario($entityManager);

            if ($user === null) {
                $entityManager->rollback();
                return new Response('Error localizando al usuario');
            }

            //Registrar solicitud de recogida
            $solicitud = $this->registrarSolicitudRecogida($entityManager, $request, $user);

            if ($solicitud === 'null') {
                $entityManager->rollback();
                return new Response('Error registrando la solicitud');
            }

            //Registrar la nueva dirección de recogida
            $direccion = $this->modificarDireccion($entityManager, $request, $user);

            if ($direccion !== 'ok') {
                $entityManager->rollback();
                return new Response($direccion);
            }

            //notificar por el sistema al administrador la solicitud de recogida
            $notificarSistema = $this->notificarSistema($entityManager, 6, $solicitud, $user);
            if ($notificarSistema === null) {
                $entityManager->rollback();
                return new Response('Error eviando la notificación del sistema al administrador');
            }

            //notificar por el correo al administrador la solicitud de recogida
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>6]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "Usted tiene una solicitud de recogida del usuario " . $user->getNombre() . ' ' . $user->getApellidos() . " en el Sistema de Royalties";
            }
            $notificarCorreo = $this->notificarCorreo($mailer, $user, $userRepository->correoAdmin(),$mensaje);
            if ($notificarCorreo === null) {
                return new Response('Error enviando correo al usuario');
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la solicitud de recogida ');
        }

    }

    /**
     * @Route("/{id}/update", name="app_solicitar_recogida_update", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param SolicitarRecogida $solicitar
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function update(EntityManagerInterface $entityManager, Request $request, SolicitarRecogida $solicitar, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        $entityManager->beginTransaction();

        //Modificar servicio
        try {
            $solicitar->setFechaRecogida(new DateTime($request->request->get('fechaRecogida')));
            $solicitar->setHora(new DateTime($request->request->get('horaRecogida')));
            $solicitar->setHoraFinRecogida(new DateTime($request->request->get('horaFinRecogida')));
            $solicitar->setLinkRecogida($request->request->get('linkRecogida'));
            $solicitar->setObservacionRecogida($request->request->get('observacionRecogida'));
            $solicitar->setEstado('Aprobada');

            $entityManager->persist($solicitar);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error aprobando la solicitud');
        }

        //Insertar la nueva notificacion de aprobada la solicitud de recogida
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo(9);
            $notificacion->setUser($solicitar->getUser());
            $entityManager->persist($notificacion);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error enviando la notificación al usuario');
        }

        try {
            //mail de solicitud de recogida aprobada
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>9]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le aprobó una solicitud de recogida en el Sistema de Royalties";
            }
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($solicitar->getUser()->getEmail())
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
     * @Route("/{id}/rechazar", name="app_solicitar_recogida_rechazar", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param SolicitarRecogida $solicitar
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function rechazar(EntityManagerInterface $entityManager, Request $request, SolicitarRecogida $solicitar, MailerInterface $mailer,TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        $entityManager->beginTransaction();

        //Modificar servicio
        try {
            $solicitar->setMotivoRechazo($request->request->get('motivo'));
            $solicitar->setEstado('Rechazada');

            $entityManager->persist($solicitar);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error rechazando la solicitud');
        }

        //Insertar la nueva notificacion de rechazada la solicitud de recogida
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo(11);
            $notificacion->setUser($solicitar->getUser());
            $entityManager->persist($notificacion);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error enviando la notificación al usuario');
        }

        try {
            //mail de solicitud de recogida rechazada
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>11]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le rechazó una solicitud de recogida en el Sistema de Royalties";
            }
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($solicitar->getUser()->getEmail())
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

    //Funciones para registrar un solicitud de recogida
    private function obtenerUsuario(EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();
        if($user !== null) {
            $user = $entityManager->getRepository(User::class)->find($user->getId());
        }else{
            return null;
        }
        return $user;
    }

    private function registrarSolicitudRecogida(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
            $datetime = new DateTime();
            $solicitud = new SolicitarRecogida();
            $solicitud->setFechaSolicitud($datetime);
            $solicitud->setNombreContactoRecogida($request->get('nombre'));
            $solicitud->setDireccionContactoRecogida($request->get('direccion'));
            $solicitud->setTelefonoContactoRecogida($request->get('telefono'));
            $solicitud->setPoblacionContactoRecogida($request->get('poblacion'));
            $solicitud->setProvinciaContactoRecogida($request->get('provincia'));
            $solicitud->setPaisContactoRecogida($request->get('pais'));
            $solicitud->setCodigoPostalContactoRecogida($request->get('codigoPostal'));
            $solicitud->setIndicadorSolicitud($request->get('preferencia'));
            $solicitud->setEstado('Sin aprobar');
            $solicitud->setUser($user);
            $entityManager->persist($solicitud);
            $entityManager->flush();
            return $solicitud;
        } catch (Exception) {
            return null;
        }

    }

    private function modificarDireccion(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
            $direccion = $entityManager->getRepository(DireccionRecogida::class)->find($request->get('idDireccion'));
            if ($direccion !== null) {
                $direccion->setNombre($request->get('nombre'));
                $direccion->setDireccion($request->get('direccion'));
                $direccion->setTelefono($request->get('telefono'));
                $direccion->setPoblacion($request->get('poblacion'));
                $direccion->setProvincia($request->get('provincia'));
                $direccion->setPais($request->get('pais'));
                $direccion->setCodigoPostal($request->get('codigoPostal'));
                $direccion->setUser($user);
                $entityManager->flush();
            }else {
                $direccion = new DireccionRecogida();
                $direccion->setNombre($request->get('nombre'));
                $direccion->setDireccion($request->get('direccion'));
                $direccion->setTelefono($request->get('telefono'));
                $direccion->setPoblacion($request->get('poblacion'));
                $direccion->setProvincia($request->get('provincia'));
                $direccion->setPais($request->get('pais'));
                $direccion->setCodigoPostal($request->get('codigoPostal'));
                $direccion->setUser($user);
                $entityManager->persist($direccion);
                $entityManager->flush();
            }
            return 'ok';
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    private function notificarSistema(EntityManagerInterface $entityManager, $tipo, $solicitud, $user)
    {
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo($tipo);
            $notificacion->setSolicitudRecogida($solicitud);
            $notificacion->setUser($user);
            $entityManager->persist($notificacion);
            $entityManager->flush();
            return 'ok';

        } catch (Exception) {
            return null;
        }

    }

    private function notificarCorreo(MailerInterface $mailer, $user, $correoAdmin, $mensaje)
    {
        try {
            if ($correoAdmin !== null) {
                $email = (new TemplatedEmail())
                    ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                    ->to($correoAdmin[0]->getEmail())
                    ->subject('Notificación del Sistema de Royalties')
                    ->htmlTemplate('correo/plantillaCorreo.html.twig')
                    ->context([
                        'mensaje' => $mensaje
                    ]);

                $mailer->send($email);
                return 'ok';
            }
            return 'ok';

        } catch (TransportExceptionInterface) {
            return 'ok';
        }

    }

}
