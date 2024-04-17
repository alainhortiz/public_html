<?php

namespace App\Controller;

use App\Entity\Notificacion;
use App\Entity\Producto;
use App\Entity\User;
use App\Repository\NotificacionRepository;
use App\Repository\ProductoRepository;
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
 * @Route("/servicio")
 */
class ServicioController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_servicio_index", methods={"GET"})
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

        return $this->render('servicio/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'servicios' => $productoRepository->findBy(array('tipoProducto' => '3', 'isActive' => true)),
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
            'service' => 1,
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
     * @Route("/misServicios", name="app_mis_servicios", methods={"GET"})
     * @param UserRepository $userRepository
     * @param ProductoRepository $productoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function misServicios(UserRepository $userRepository, ProductoRepository $productoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('servicios_asignados/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'servicios' => $productoRepository->findBy(array('user' => $user, 'tipoProducto' => array('3'))),
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
            'service' => 1,
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
     * @Route("/formNew", name="app_servicio_form_new", methods={"GET", "POST"})
     * @param NotificacionRepository $notificacionRepository
     * @param UserRepository $userRepository
     * @return Response
     */
    public function formNew(NotificacionRepository $notificacionRepository, UserRepository $userRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('servicio/addServicio.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
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
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 1,
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
     * @Route("/newFichero", name="app_servicio_fichero", options={"expose"=true}, methods={"GET", "POST"})
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
     * @Route("/new", name="app_servicio_new", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function new(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {

        $entityManager->beginTransaction();

        $user = $entityManager->getRepository(User::class)->find($request->request->get('usuario'));
        if ($user === null) {
            $entityManager->rollback();
            return new Response('Error localizando al usuario');
        }

        //Insertar servicio
        try {
            $producto = new Producto();
            $producto->setNombre($request->request->get('nombre'));
            $producto->setTipoProducto($request->request->get('tipoProducto'));
            $producto->setBeneficioxventa((float)$request->request->get('beneficio'));
            $producto->setTipodemoneda($request->request->get('tipoMoneda'));
            $producto->setConceptoServicio($request->request->get('concepto'));
            $producto->setDescripcionServicio($request->request->get('descripcion'));
            if ($request->request->get('fichero') !== null) {
                $producto->setDocumentoServicio($request->request->get('fichero'));
            }
            $producto->setUser($user);

            $entityManager->persist($producto);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando el servicio');
        }

        //Insertar la notificacion de tipo producto asignado
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo(8);
            $notificacion->setProducto($producto);
            $notificacion->setUser($user);
            $entityManager->persist($notificacion);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error enviando la notificación al usuario');
        }

        try {
            //notificar por el correo al administrador producto agotado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>8]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le asignó un servicio en el Sistema de Royalties";
            }

            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($user->getEmail())
                ->subject('Notificación del Sistema de Royalties')
                // path of the Twig template to render
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
     * @Route("/{id}", name="app_servicio_show", methods={"GET"})
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

        return $this->render('servicio/show.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'servicios' => $productoRepository->findAll(),
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
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 1,
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
     * @Route("/{id}/edit", name="app_servicio_form_edit", methods={"GET", "POST"})
     * @param UserRepository $userRepository
     * @param Producto $servicio
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function edit(UserRepository $userRepository, Producto $servicio, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('servicio/editServicio.html.twig', [
            'servicio' => $servicio,
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
            'service' => 1,
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
     * @Route("/{id}/update", name="app_servicio_update", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param Producto $servicio
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function update(EntityManagerInterface $entityManager, Request $request, Producto $servicio, NotificacionRepository $notificacionRepository): Response
    {
        $entityManager->beginTransaction();

        $user = $entityManager->getRepository(User::class)->find($request->request->get('usuario'));
        if ($user === null) {
            $entityManager->rollback();
            return new Response('Error localizando al usuario');
        }

        //Modificar servicio
        try {
            $servicio->setNombre($request->request->get('nombre'));
            $servicio->setTipoProducto($request->request->get('tipoProducto'));
            $servicio->setBeneficioxventa((float)$request->request->get('beneficio'));
            $servicio->setTipodemoneda($request->request->get('tipoMoneda'));
            $servicio->setConceptoServicio($request->request->get('concepto'));
            $servicio->setDescripcionServicio($request->request->get('descripcion'));
            if ($request->request->get('fichero') !== null) {
                $servicio->setDocumentoServicio($request->request->get('fichero'));
            }
            $servicio->setUser($user);

            $entityManager->persist($servicio);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error modificando el servicio');
        }

        if ($request->request->get('usuario') !== $request->request->get('usuarioAnterior')) {
            //Borrar la notificacion
            try {
                $notificacion = $notificacionRepository->findOneBy(array('producto' => $servicio));
                if ($notificacion !== null) {
                    $notificacionRepository->remove($notificacion);
                }
            } catch (Exception) {
                $entityManager->rollback();
                return new Response('Error borrando la notificación');
            }
            //Insertar la nueva notificacion de asignación de servicio
            try {
                $datetime = new DateTime();
                $notificacion = new Notificacion();
                $notificacion->setFecha($datetime);
                $notificacion->setEstado(false);
                $notificacion->setTipo(8);
                $notificacion->setProducto($servicio);
                $notificacion->setUser($user);
                $entityManager->persist($notificacion);
                $entityManager->flush();
            } catch (Exception) {
                $entityManager->rollback();
                return new Response('Error enviando la notificación al usuario');
            }
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();


        return new Response('ok');
    }

    /**
     * @Route("/delete", name="app_servicio_delete", options={"expose"=true}, methods={"GET", "POST"})
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
                return new Response('Error borrando el servicio');
            }
        } else {
            $entityManager->rollback();
            return new Response('Error localizando el servicio');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');

    }

}
