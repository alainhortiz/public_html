<?php

namespace App\Controller;

use App\Entity\Bizum;
use App\Entity\EstadoFondo;
use App\Entity\IngresoSaldo;
use App\Entity\Notificacion;
use App\Entity\Pack;
use App\Entity\PackProducto;
use App\Entity\Paypal;
use App\Entity\Producto;
use App\Entity\ResetPasswordRequest;
use App\Entity\RetiroSaldo;
use App\Entity\SolicitarPagoRoyalAcumulado;
use App\Entity\SolicitarRecogida;
use App\Entity\TransferenciaBancaria;
use App\Entity\User;
use App\Entity\VentaCancelada;
use App\Entity\VentaProducto;
use App\Entity\Westerunion;
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
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_user_index", methods={"GET"})
     * @param ProductoRepository $productoRepository
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(ProductoRepository $productoRepository, UserRepository $userRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        $prod = $productoRepository->obtenerbeneficio();
        $ultimoid = $userRepository->ultimoID();

        if (count($ultimoid) == 1) {
            $unosolo = $ultimoid;
        }

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findBy(array('isActive' => true)),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'productoss' => $prod,
            'servicioss' => 0,
            'ultimo' => $unosolo[0]['id'],
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 1,
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
     * @Route("/inactivos", name="app_user_inactivos", methods={"GET"})
     * @param ProductoRepository $productoRepository
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function inactivos(ProductoRepository $productoRepository, UserRepository $userRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        $prod = $productoRepository->obtenerbeneficio();
        $ultimoid = $userRepository->ultimoID();

        if (count($ultimoid) == 1) {
            $unosolo = $ultimoid;
        }

        return $this->render('user_inactivos/index.html.twig', [
            'usersI' => $userRepository->findBy(array('isActive' => false)),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'productoss' => $prod,
            'servicioss' => 0,
            'ultimo' => $unosolo[0]['id'],
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 1,
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
     * @Route("/formRegistro", name="app_user_form_registro", methods={"GET", "POST"})
     * @return Response
     */
    public function formRegistro(): Response
    {
        return $this->renderForm('user/registroUser.html.twig', [
            'user' => null,
            'mensaje' => 0,
            'totalNotificacionesAdmin' => null,
            'totalNotificacionesUser' => null,
            'notificacionesAdmin' => null,
            'notificacionesUser' => null,
        ]);
    }

    /**
     * @Route("/formNew", name="app_user_form_new", methods={"GET", "POST"})
     * @return Response
     */
    public function formNew(): Response
    {
        return $this->renderForm('user/addUser.html.twig', [
            'user' => null,
            'mensaje' => 0,
            'totalNotificacionesAdmin' => null,
            'totalNotificacionesUser' => null,
            'notificacionesAdmin' => null,
            'notificacionesUser' => null,
        ]);
    }

    /**
     * @Route("/newFichero", name="app_user_fichero", options={"expose"=true}, methods={"GET", "POST"})
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
     * @Route("/registro", name="app_user_registro", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param MailerInterface $mailer
     * @param UserPasswordHasherInterface $passwordEncoder
     * @param UserRepository $userRepository
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function registro(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer, UserPasswordHasherInterface $passwordEncoder, UserRepository $userRepository, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {

        $email = count($userRepository->findBy(array('email' => $request->get('email'))));

        if ($email >= 1) {
            return new Response('Ese correo ya esta registrado en el sistema');
        }

        $entityManager->beginTransaction();

        //Registrar usuario
        try {
            $user = new User();
            $user->setNombre($request->get('nombre'));
            $user->setApellidos($request->get('apellidos'));
            $user->setEmpresa($request->get('empresa'));
            $user->setDireccion($request->get('direccion'));
            $user->setPoblacion($request->get('poblacion'));
            $user->setPais($request->get('pais'));
            $user->setEmail((string)$request->get('email'));
            $user->setCodigoPostal($request->request->get('postal'));
            $user->setTelefono($request->get('telefono'));
            $user->setProvincia($request->get('provincia'));
            $user->setNifcif($request->get('nif'));
            $user->setAvatar($request->get('fichero'));
            $user->setRoles(['ROLE_USER']);
            $user->setIsActive(0);
            $user->setEmitirfactura(false);
            $user->setPassword($passwordEncoder->hashPassword($user, $request->request->get('password')));
            $entityManager->persist($user);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando el usuario');
        }

        //Insertar la notificacion de tipo registro de usuario
        try {
            $datetime = new DateTime();
            $notificacion = new Notificacion();
            $notificacion->setFecha($datetime);
            $notificacion->setEstado(false);
            $notificacion->setTipo(1);
            $entityManager->persist($notificacion);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error enviando la notificación al administrador');
        }

        try {
            $correoAdmin = $userRepository->correoAdmin();
            $credenciales = " CREDENCIALES PARA USO EXCLUSIVO (username: " . $request->get('email') . " password: " . $request->request->get('password') . ")";
            if ($correoAdmin !== null) {
                //mail de registro de usuario
                $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>14]);
                if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                    $mensaje = $tipoNotificacion->getMensaje();
                }else{
                    $mensaje = "Usted tiene un registro de usuario solicitando activación en el Sistema de Royalties";
                }
                $mensaje = $mensaje . $credenciales;
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
     * @Route("/new", name="app_user_new", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param MailerInterface $mailer
     * @param UserPasswordHasherInterface $passwordEncoder
     * @param UserRepository $userRepository
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function new(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer, UserPasswordHasherInterface $passwordEncoder, UserRepository $userRepository, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {

        $email = $userRepository->cantidadUserporEmail($request->request->get('email'));

        if ($email >= 1) {
            return new Response('Ese correo ya esta registrado en el sistema');
        }

        $entityManager->beginTransaction();

        //Registrar usuario
        try {
            $user = new User();
            $user->setNombre($request->request->get('nombre'));
            $user->setApellidos($request->request->get('apellidos'));
            $user->setEmpresa($request->request->get('empresa'));
            $user->setDireccion($request->request->get('direccion'));
            $user->setPoblacion($request->request->get('poblacion'));
            $user->setPais($request->request->get('pais'));
            $user->setEmail($request->request->get('email'));
            $user->setCodigoPostal($request->request->get('postal'));
            $user->setTelefono($request->request->get('telefono'));
            $user->setProvincia($request->request->get('provincia'));
            $user->setNifcif($request->request->get('nif'));
            $user->setAvatar($request->request->get('fichero'));
            $user->setRoles([$request->request->get('rol')]);
            $user->setIsActive(1);
            $user->setEmitirfactura($request->request->get('factura'));
            $user->setPassword($passwordEncoder->hashPassword($user, $request->request->get('password')));
            $clave = $passwordEncoder->
            $entityManager->persist($user);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando el usuario');
        }

        try {
            //mail de usuario activado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>1]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "Usted ha sido activado en el Sistema de Royalties";
            }
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($user->getEmail())
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

        try {
            $correoAdmin = $userRepository->correoAdmin();
            $credenciales = " CREDENCIALES DE UN NUEVO USUARIO PARA USO EXCLUSIVO (username: " . $request->get('email') . " password: " . $request->request->get('password') . ")";
            if ($correoAdmin !== null) {
                $email = (new TemplatedEmail())
                    ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                    ->to($correoAdmin[0]->getEmail())
                    ->subject('Notificación del Sistema de Royalties')
                    ->htmlTemplate('correo/plantillaCorreo.html.twig')

                    // pass variables (name => value) to the template
                    ->context([
                        'mensaje' => $credenciales
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
     * @Route("/{id}", name="app_user_show", methods={"GET"})
     * @param User $user
     * @param ProductoRepository $productoRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function show(User $user, ProductoRepository $productoRepository, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $userActual = $this->getUser();
        $id = $userActual->getId();
        $bolsaGeneralDolar = $user->getSaldoGeneralUSD();
        $bolsaGeneralEuros = $user->getSaldoGeneralEUR();
        $bolsaLibroDolar = $user->getSaldoLibroUSD();
        $bolsaLibroEuros = $user->getSaldoLibroEUR();
        $bolsaServicioDolar = $user->getSaldoServicioUSD();
        $bolsaServicioEuros = $user->getSaldoServicioEUR();

        return $this->render('user/show.html.twig', [
            'user' => $user,
            'productos' => $productoRepository->productosasignados($user->getId()),
            'servicios' => $productoRepository->serviciosasignados($user->getId()),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'bolsaGeneralDolar' => $bolsaGeneralDolar,
            'bolsaGeneralEuros' => $bolsaGeneralEuros,
            'bolsaLibroDolar' => $bolsaLibroDolar,
            'bolsaLibroEuros' => $bolsaLibroEuros,
            'bolsaServicioDolar' => $bolsaServicioDolar,
            'bolsaServicioEuros' => $bolsaServicioEuros,
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignarp' => 0,
            'asignars' => 0,
            'recogida' => 0,
            'usuar' => 1,
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
     * @Route("/{id}/edit", name="app_user_form_edit", methods={"GET", "POST"})
     * @param UserRepository $userRepository
     * @param User $user
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function edit(UserRepository $userRepository, User $user, NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $userActual = $this->getUser();
        $id = $userActual->getId();

        return $this->renderForm('user/editUser.html.twig', [
            'user' => $user,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $userActual, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11','12','13')))),
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
            'usuar' => 1,
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
     * @Route("/{id}/update", name="app_user_update", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function update(EntityManagerInterface $entityManager, Request $request, User $user): Response
    {

        $entityManager->beginTransaction();

        //Modificar usuario
        try {
            $user->setNombre($request->request->get('nombre'));
            $user->setApellidos($request->request->get('apellidos'));
            $user->setEmpresa($request->request->get('empresa'));
            $user->setDireccion($request->request->get('direccion'));
            $user->setPoblacion($request->request->get('poblacion'));
            $user->setPais($request->request->get('pais'));
            $user->setEmail($request->request->get('email'));
            $user->setCodigoPostal($request->request->get('postal'));
            $user->setTelefono($request->request->get('telefono'));
            $user->setProvincia($request->request->get('provincia'));
            $user->setNifcif($request->request->get('nif'));
            if ($request->request->get('fichero') !== '') {
                $user->setAvatar($request->request->get('fichero'));
            }
            $user->setRoles([$request->request->get('rol')]);
            $user->setEmitirfactura($request->request->get('factura'));
            $user->setIsActive(true);
            $entityManager->persist($user);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error modificando el usuario');
        }


        //Persistiendo en todas las entidades
        $entityManager->commit();


        return new Response('ok');
    }

    /**
     * @Route("/obtener_usuariosall", options={"expose"=true}, name="obtener_usuariosall", methods={"POST"})
     * @throws Exception
     */
    public function usuariosall(Request $request, UserRepository $userRepository): Response
    {
        if ($request->isXmlHttpRequest()) {
            $resultados = $userRepository->productoNombreApellido();
            return new JsonResponse($resultados);
        }

        throw new Exception('Esta intentando entrar por JS');
    }

    /**
     * @Route("/{id}/activar", name="app_user_activar", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param User $user
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function activar(EntityManagerInterface $entityManager, User $user, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        $entityManager->beginTransaction();

        //Activar Usuario
        try {
            $user->setIsActive(true);

            $entityManager->persist($user);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error activando al usuario');
        }

        try {
            //mail de usuario activado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>1]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "Usted ha sido activado en el Sistema de Royalties";
            }
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($user->getEmail())
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
     * @Route("/{id}/emitir", name="app_user_emitir", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param User $user
     * @return Response
     */
    public function emitir(EntityManagerInterface $entityManager, User $user): Response
    {
        $entityManager->beginTransaction();

        //Activar Usuario
        try {
            $user->setEmitirfactura(true);

            $entityManager->persist($user);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error autorizando al usuario a emitir factura');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/{id}/ingreso", name="app_user_ingreso_saldo", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @param User $user
     * @param MailerInterface $mailer
     * @param TipoNotificacionRepository $tipoNotificacionRepository
     * @return Response
     * @throws TransportExceptionInterface
     */
    public function ingreso(EntityManagerInterface $entityManager, Request $request, User $user, MailerInterface $mailer, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {

        $entityManager->beginTransaction();

        //Modificar saldo inicial
        try {
            if ($request->request->get('generalUSD') !== '0') {
                $aumento = (float)$request->get('generalUSD');
                $saldo = (float) $user->getSaldoGeneralUSD();
                $saldoUSD = (float) $user->getSaldoGeneralUSD() + (float) $user->getSaldoLibroUSD() + (float) $user->getSaldoServicioUSD() + $aumento;
                $restante = $saldo + $aumento;
                if ($saldo <= 0){
                    $user->setSaldoInicialGeneralUSD($aumento);
                    $user->setSaldoGeneralUSD($restante);
                    //Registrar movimiento
                    try {
                        $datetime = new DateTime();
                        $movimiento = new EstadoFondo();
                        $movimiento->setSaldo($saldoUSD);
                        $movimiento->setTipodemoneda('USD');
                        $movimiento->setFecha($datetime);
                        $movimiento->setAccion(1);
                        $movimiento->setUser($user);
                        $entityManager->persist($movimiento);
                        $entityManager->flush();
                    } catch (Exception) {
                        $entityManager->rollback();
                        return new Response('Error registrando el estado de cuenta');
                    }
                }else {
                    $entityManager->rollback();
                    return new Response('Este usuario ya tiene royalties en su cuenta.');
                }
            }
            if ($request->request->get('generalEUR') !== '0') {
                $aumento = (float)$request->get('generalEUR');
                $saldo = (float) $user->getSaldoGeneralEUR();
                $saldoEUR = (float) $user->getSaldoGeneralEUR() + (float) $user->getSaldoLibroEUR() + (float) $user->getSaldoServicioEUR() + $aumento;
                $restante = $saldo + $aumento;
                if ($saldo <= 0){
                    $user->setSaldoInicialGeneralEUR($aumento);
                    $user->setSaldoGeneralEUR($restante);
                    //Registrar movimiento
                    try {
                        $datetime = new DateTime();
                        $movimiento = new EstadoFondo();
                        $movimiento->setSaldo($saldoEUR);
                        $movimiento->setTipodemoneda('EUR');
                        $movimiento->setFecha($datetime);
                        $movimiento->setAccion(1);
                        $movimiento->setUser($user);
                        $entityManager->persist($movimiento);
                        $entityManager->flush();
                    } catch (Exception) {
                        $entityManager->rollback();
                        return new Response('Error registrando el estado de cuenta');
                    }
                }else {
                    $entityManager->rollback();
                    return new Response('Este usuario ya tiene royalties en su cuenta.');
                }
            }
            if ($request->request->get('libroUSD') !== '0') {
                $aumento = (float)$request->get('libroUSD');
                $saldo = (float) $user->getSaldoLibroUSD();
                $saldoUSD = (float) $user->getSaldoGeneralUSD() + (float) $user->getSaldoLibroUSD() + (float) $user->getSaldoServicioUSD() + $aumento;
                $restante = $saldo + $aumento;
                if ($saldo <= 0){
                    $user->setSaldoInicialLibroUSD($aumento);
                    $user->setSaldoLibroUSD($restante);
                    //Registrar movimiento
                    try {
                        $datetime = new DateTime();
                        $movimiento = new EstadoFondo();
                        $movimiento->setSaldo($saldoUSD);
                        $movimiento->setTipodemoneda('USD');
                        $movimiento->setFecha($datetime);
                        $movimiento->setAccion(1);
                        $movimiento->setUser($user);
                        $entityManager->persist($movimiento);
                        $entityManager->flush();
                    } catch (Exception) {
                        $entityManager->rollback();
                        return new Response('Error registrando el estado de cuenta');
                    }
                }else {
                    $entityManager->rollback();
                    return new Response('Este usuario ya tiene royalties en su cuenta.');
                }
            }
            if ($request->request->get('libroEUR') !== '0') {
                $aumento = (float)$request->get('libroEUR');
                $saldo = (float) $user->getSaldoLibroEUR();
                $saldoEUR = (float) $user->getSaldoGeneralEUR() + (float) $user->getSaldoLibroEUR() + (float) $user->getSaldoServicioEUR() + $aumento;
                $restante = $saldo + $aumento;
                if ($saldo <= 0){
                    $user->setSaldoInicialLibroEUR($aumento);
                    $user->setSaldoLibroEUR($restante);
                    //Registrar movimiento
                    try {
                        $datetime = new DateTime();
                        $movimiento = new EstadoFondo();
                        $movimiento->setSaldo($saldoEUR);
                        $movimiento->setTipodemoneda('EUR');
                        $movimiento->setFecha($datetime);
                        $movimiento->setAccion(1);
                        $movimiento->setUser($user);
                        $entityManager->persist($movimiento);
                        $entityManager->flush();
                    } catch (Exception) {
                        $entityManager->rollback();
                        return new Response('Error registrando el estado de cuenta');
                    }
                }else {
                    $entityManager->rollback();
                    return new Response('Este usuario ya tiene royalties en su cuenta.');
                }
            }
            if ($request->request->get('servicioUSD') !== '0') {
                $aumento = (float)$request->get('servicioUSD');
                $saldo = (float) $user->getSaldoServicioUSD();
                $saldoUSD = (float) $user->getSaldoGeneralUSD() + (float) $user->getSaldoLibroUSD() + (float) $user->getSaldoServicioUSD() + $aumento;
                $restante = $saldo + $aumento;
                if ($saldo <= 0){
                    $user->setSaldoInicialServicioUSD($aumento);
                    $user->setSaldoServicioUSD($restante);
                    //Registrar movimiento
                    try {
                        $datetime = new DateTime();
                        $movimiento = new EstadoFondo();
                        $movimiento->setSaldo($saldoUSD);
                        $movimiento->setTipodemoneda('USD');
                        $movimiento->setFecha($datetime);
                        $movimiento->setAccion(1);
                        $movimiento->setUser($user);
                        $entityManager->persist($movimiento);
                        $entityManager->flush();
                    } catch (Exception) {
                        $entityManager->rollback();
                        return new Response('Error registrando el estado de cuenta');
                    }
                }else {
                    $entityManager->rollback();
                    return new Response('Este usuario ya tiene royalties en su cuenta.');
                }
            }
            if ($request->request->get('servicioEUR') !== '0') {
                $aumento = (float)$request->get('servicioEUR');
                $saldo = (float) $user->getSaldoServicioEUR();
                $saldoEUR = (float) $user->getSaldoGeneralEUR() + (float) $user->getSaldoLibroEUR() + (float) $user->getSaldoServicioEUR() + $aumento;
                $restante = $saldo + $aumento;
                if ($saldo <= 0){
                    $user->setSaldoInicialServicioEUR($aumento);
                    $user->setSaldoServicioEUR($restante);
                    //Registrar movimiento
                    try {
                        $datetime = new DateTime();
                        $movimiento = new EstadoFondo();
                        $movimiento->setSaldo($saldoEUR);
                        $movimiento->setTipodemoneda('EUR');
                        $movimiento->setFecha($datetime);
                        $movimiento->setAccion(1);
                        $movimiento->setUser($user);
                        $entityManager->persist($movimiento);
                        $entityManager->flush();
                    } catch (Exception) {
                        $entityManager->rollback();
                        return new Response('Error registrando el estado de cuenta');
                    }
                }else {
                    $entityManager->rollback();
                    return new Response('Este usuario ya tiene royalties en su cuenta.');
                }
            }
            $entityManager->persist($user);
            $entityManager->flush();
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando el ingreso de royalties');
        }

        try {
            //mail de usuario activado
            $tipoNotificacion = $tipoNotificacionRepository->findOneBy(['codigo'=>13]);
            if ($tipoNotificacion !== null && $tipoNotificacion->getMensaje() !== null) {
                $mensaje = $tipoNotificacion->getMensaje();
            }else{
                $mensaje = "A usted se le ha ingresado royalties en el Sistema de Royalties";
            }
            $email = (new TemplatedEmail())
                ->from(new Address('admin@eltaumaturgo.com', 'Administrador'))
                ->to($user->getEmail())
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
     * @Route("/delete", name="app_user_delete", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function delete(EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->beginTransaction();

        $user = $entityManager->getRepository(User::class)->find($request->get('id'));
        if ($user !== null) {
            try {
                //Borrar las notificaciones
                $notificaciones = $entityManager->getRepository(Notificacion::class)->findBy(['user' => $user]);
                if (!empty($notificaciones)) {
                    foreach ($notificaciones as $n) {
                        $entityManager->remove($n);
                    }
                    $entityManager->flush();
                }

                //Borrar las solicitudes de pago
                $pagos = $entityManager->getRepository(SolicitarPagoRoyalAcumulado::class)->findBy(['user' => $user]);
                if (!empty($pagos)) {
                    foreach ($pagos as $p) {
                        $entityManager->remove($p);
                    }
                    $entityManager->flush();
                }

                //Borrar metodo de pago bizum
                $bizum = $entityManager->getRepository(Bizum::class)->findOneBy(['user' => $user]);
                if ($bizum !== null) {
                    $entityManager->remove($bizum);
                    $entityManager->flush();
                }

                //Borrar metodo de pago bizum
                $paypal = $entityManager->getRepository(Paypal::class)->findOneBy(['user' => $user]);
                if ($paypal !== null) {
                    $entityManager->remove($paypal);
                    $entityManager->flush();
                }

                //Borrar metodo de pago bizum
                $transferencia = $entityManager->getRepository(TransferenciaBancaria::class)->findOneBy(['user' => $user]);
                if ($transferencia !== null) {
                    $entityManager->remove($transferencia);
                    $entityManager->flush();
                }

                //Borrar metodo de pago wester union
                $wester = $entityManager->getRepository(Westerunion::class)->findOneBy(['user' => $user]);
                if ($wester !== null) {
                    $entityManager->remove($wester);
                    $entityManager->flush();
                }

                //Borrar las solicitudes de recogida
                $recogidas = $entityManager->getRepository(SolicitarRecogida::class)->findBy(['user' => $user]);
                if (!empty($recogidas)) {
                    foreach ($recogidas as $r) {
                        $entityManager->remove($r);
                    }
                    $entityManager->flush();
                }

                //Borrar los retiros de saldos
                $retiros = $entityManager->getRepository(RetiroSaldo::class)->findBy(['user' => $user]);
                if (!empty($retiros)) {
                    foreach ($retiros as $r) {
                        $entityManager->remove($r);
                    }
                    $entityManager->flush();
                }

                //Borrar los ingresos de saldos
                $ingresos = $entityManager->getRepository(IngresoSaldo::class)->findBy(['user' => $user]);
                if (!empty($ingresos)) {
                    foreach ($ingresos as $r) {
                        $entityManager->remove($r);
                    }
                    $entityManager->flush();
                }

                //Borrar los reset de clave
                $reset = $entityManager->getRepository(ResetPasswordRequest::class)->findBy(['user' => $user]);
                if (!empty($reset)) {
                    foreach ($reset as $r) {
                        $entityManager->remove($r);
                    }
                    $entityManager->flush();
                }

                foreach ($user->getProductos() as $p) {
                    try {

                        //Borrar ventas de productos
                        $ventas = $entityManager->getRepository(VentaProducto::class)->findBy(['producto' => $p->getId()]);
                        if (!empty($ventas)) {
                            foreach ($ventas as $v) {
                                $entityManager->remove($v);
                            }
                            $entityManager->flush();
                        }

                        //Borrar ventas canceladas
                        $canceladas = $entityManager->getRepository(VentaCancelada::class)->findBy(['producto' => $p->getId()]);
                        if (!empty($canceladas)) {
                            foreach ($canceladas as $c) {
                                $entityManager->remove($c);
                            }
                            $entityManager->flush();
                        }

                        //Borrar notificaciones de productos
                        $notificaciones = $entityManager->getRepository(Notificacion::class)->findBy(['producto' => $p->getId()]);
                        if (!empty($notificaciones)) {
                            foreach ($notificaciones as $n) {
                                $entityManager->remove($n);
                            }
                            $entityManager->flush();
                        }

                        //Borrar los productos de los packs
                        $productosPack = $entityManager->getRepository(PackProducto::class)->findBy(['producto' => $p->getId()]);
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
                                    }else {
                                        $entityManager->rollback();
                                        return new Response('Error localizando  el pack al que pertenece el producto');
                                    }
                                }else {
                                    $entityManager->rollback();
                                    return new Response('Error localizando el producto en un pack');
                                }
                                $entityManager->remove($n);
                            }
                            $entityManager->flush();
                        }
                    } catch (Exception $e) {
                        $entityManager->rollback();
                        return new Response($e->getMessage());
                    }
                }

                //Borrar el producto
                $producto = $entityManager->getRepository(Producto::class)->findBy(['user' => $user]);
                if (!empty($producto)) {
                    foreach ($producto as $pr) {
                        $entityManager->remove($pr);
                    }
                    $entityManager->flush();
                }
                //Borrar el usuario
                $entityManager->remove($user);
                $entityManager->flush();
            } catch (Exception $e) {
                $entityManager->rollback();
                return new Response($e->getMessage());
            }
        } else {
            $entityManager->rollback();
            return new Response('Error localizando al usuario');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }


}
