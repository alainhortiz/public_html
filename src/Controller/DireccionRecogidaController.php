<?php

namespace App\Controller;

use App\Entity\DireccionRecogida;
use App\Entity\User;
use App\Repository\DireccionRecogidaRepository;
use App\Repository\NotificacionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/direccion")
 */
class DireccionRecogidaController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/", name="app_direccion_index", methods={"GET"})
     * @param UserRepository $userRepository
     * @param DireccionRecogidaRepository $direccionRecogidaRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(UserRepository $userRepository, DireccionRecogidaRepository $direccionRecogidaRepository, NotificacionRepository $notificacionRepository): Response
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


        return $this->render('direccion_recogida/index.html.twig', [
            'users' => $userRepository->findBy(array('isActive' => true)),
            'direccion' => $direccionRecogidaRepository->findBy(array('user' => $user)),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'servicioss' => 0,
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
            'vs' => 0,
            'canceladas' => 0,
            'estad' => 1,
            'estadUser' => 0,
            'direcc' => 1,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/insert", name="app_direccion_new", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function insert(EntityManagerInterface $entityManager, Request $request): Response
    {

        $entityManager->beginTransaction();
        try {
            //obtener el usuario
            $user = $this->obtenerUsuario($entityManager);

            if ($user === null) {
                $entityManager->rollback();
                return new Response('Error localizando al usuario');
            }

            //Registrar la nueva dirección de recogida
            $direccion = $this->registrarNuevaDireccion($entityManager, $request, $user);

            if ($direccion !== 'ok') {
                $entityManager->rollback();
                return new Response($direccion);
            }

            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la dirección de recogida ');
        }

    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/update", name="app_direccion_update", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function update(EntityManagerInterface $entityManager, Request $request): Response
    {

        $entityManager->beginTransaction();
        try {
            //obtener el usuario
            $user = $this->obtenerUsuario($entityManager);

            if ($user === null) {
                $entityManager->rollback();
                return new Response('Error localizando al usuario');
            }

            //Modificar la dirección de recogida
            $direccion = $this->modificarDireccion($entityManager, $request, $user);

            if ($direccion !== 'ok') {
                $entityManager->rollback();
                return new Response($direccion);
            }


            //Persistiendo en todas las entidades
            $entityManager->commit();

            return new Response('ok');

        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error modificando la dirección de recogida');
        }

    }

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

    private function registrarNuevaDireccion(EntityManagerInterface $entityManager, Request $request, $user)
    {
        try {
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
            return 'ok';

        } catch (Exception $e) {
            return $e->getMessage();
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
                return 'ok';
            }
            return 'Error, la direccón de recogida no se pudo localizar';
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

}
