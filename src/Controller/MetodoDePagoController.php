<?php

namespace App\Controller;

use App\Entity\Bizum;
use App\Entity\Paypal;
use App\Entity\TransferenciaBancaria;
use App\Entity\User;
use App\Entity\Westerunion;
use App\Repository\BizumRepository;
use App\Repository\NotificacionRepository;
use App\Repository\PaypalRepository;
use App\Repository\TransferenciaBancariaRepository;
use App\Repository\UserRepository;
use App\Repository\WesterunionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/metodo_pago")
 */
class MetodoDePagoController extends AbstractController
{
    /**
     * @IsGranted("ROLE_USER")
     * @Route("/", name="app_metodo_de_pago")
     * @return Response
     */
    public function index(): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->redirectToRoute('app_metodo_de_pago_user');

    }

    /**
     * @Route("/listar", name="app_metodo_de_pago_user")
     * @param NotificacionRepository $notificacionRepository
     * @param WesterunionRepository $westerunionRepository
     * @param PaypalRepository $paypalRepository
     * @param BizumRepository $bizumRepository
     * @param TransferenciaBancariaRepository $transferenciaBancariaRepository
     * @return Response
     */
    public function listar(NotificacionRepository $notificacionRepository, WesterunionRepository $westerunionRepository, PaypalRepository $paypalRepository, BizumRepository $bizumRepository, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        if ($user !== null) {
            $id = $user->getId();
        }else {
            return new Response('Error localizando el usuario');
        }

        return $this->render('metodo_de_pago/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false, 'tipo' => array('1', '2', '3', '6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user, 'estado' => false, 'tipo' => array('4', '5', '7', '8', '9', '10', '11', '12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'westerUnion' => $westerunionRepository->findOneBy(array('user' => $user)),
            'paypal' => $paypalRepository->findOneBy(array('user' => $user)),
            'bizum' => $bizumRepository->findOneBy(array('user' => $user)),
            'transferencia' => $transferenciaBancariaRepository->findOneBy(array('user' => $user)),
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
            'royaltiesp' => 0,
            'service' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 1,
            'vp' => 0,
            'vs' => 0,
            'mensaje' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/resultado", name="app_metodo_de_pago_resultado", options={"expose"=true}, methods={"GET", "POST"})
     * @param Request $request
     * @param UserRepository $userRepository
     * @param WesterunionRepository $westerunionRepository
     * @param PaypalRepository $paypalRepository
     * @param BizumRepository $bizumRepository
     * @param TransferenciaBancariaRepository $transferenciaBancariaRepository
     * @return Response
     */
    public function resultado(Request $request, UserRepository $userRepository, WesterunionRepository $westerunionRepository, PaypalRepository $paypalRepository, BizumRepository $bizumRepository, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {

        //Buscar los metodos del usuario seleccionado
        try {
            $user = $userRepository->find($request->request->get('idUsuario'));
            if ($user !== null) {
                $westerUnion = $westerunionRepository->findOneBy(array('user' => $user));
                $paypal = $paypalRepository->findOneBy(array('user' => $user));
                $bizum = $bizumRepository->findOneBy(array('user' => $user));
                $transferencia = $transferenciaBancariaRepository->findOneBy(array('user' => $user));
            } else {
                return new Response('El usuario seleccionado no existe');
            }
        } catch (Exception) {
            return new Response('Error buscando los métodos de pago');
        }

        $output = [
            'westerUnion' => $westerUnion,
            'paypal' => $paypal,
            'bizum' => $bizum,
            'transferencia' => $transferencia
        ];

        return new JsonResponse($output);

    }

    /**
     * @Route("/westerunion", name="app_metodo_de_pago_westerunion", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function westerunion(EntityManagerInterface $entityManager, Request $request): Response
    {

        $entityManager->beginTransaction();

        //Actualizar el método de pago wester union
        try {
            $userId = $this->getUser();
            if ($userId !== null) {
                $user = $entityManager->getRepository(User::class)->find($userId->getId());
                if ($user === null) {
                    $entityManager->rollback();
                    return new Response('Error localizando el usuario');
                }
            }else {
                $entityManager->rollback();
                return new Response('Error localizando el usuario');
            }
            $wester = $entityManager->getRepository(Westerunion::class)->findOneBy(array('user' => $user));
            if ($wester !== null) {
                $wester->setNombre($request->get('nombre') ?? '');
                $wester->setPrimerApellido($request->get('primerApellido') ?? '');
                $wester->setSegundoApellido($request->get('segundoApellido'));
                $wester->setEmail($request->get('correo') ?? '');
                $wester->setCiudad($request->get('ciudad'));
                $wester->setNumeromovil($request->get('movil') ?? '');
                $entityManager->flush();
            } else {
                $wester = new Westerunion();
                $wester->setNombre($request->get('nombre') ?? '');
                $wester->setPrimerApellido($request->get('primerApellido') ?? '');
                $wester->setSegundoApellido($request->get('segundoApellido'));
                $wester->setEmail($request->get('correo') ?? '');
                $wester->setCiudad($request->get('ciudad'));
                $wester->setNumeromovil($request->get('movil') ?? '');
                $wester->setUser($user);
                $entityManager->persist($wester);
                $entityManager->flush();
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la información del método de pago wester union');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/paypal", name="app_metodo_de_pago_paypal", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function paypal(EntityManagerInterface $entityManager, Request $request): Response
    {

        $entityManager->beginTransaction();

        //Actualizar el método de pago paypal
        try {
            $userId = $this->getUser();
            if ($userId !== null) {
                $user = $entityManager->getRepository(User::class)->find($userId->getId());
                if ($user === null) {
                    $entityManager->rollback();
                    return new Response('Error localizando el usuario');
                }
            }else {
                $entityManager->rollback();
                return new Response('Error localizando el usuario');
            }
            $paypal = $entityManager->getRepository(Paypal::class)->findOneBy(array('user' => $user));
            if ($paypal !== null) {
                $paypal->setEmail($request->get('correo'));
                $entityManager->flush();
            } else {
                $paypal = new Paypal();
                $paypal->setEmail($request->get('correo'));
                $paypal->setUser($user);
                $entityManager->persist($paypal);
                $entityManager->flush();
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la información del método de pago paypal');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/bizum", name="app_metodo_de_pago_bizum", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function bizum(EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->beginTransaction();

        //Actualizar el método de pago bizum
        try {
            $userId = $this->getUser();
            if ($userId !== null) {
                $user = $entityManager->getRepository(User::class)->find($userId->getId());
                if ($user === null) {
                    $entityManager->rollback();
                    return new Response('Error localizando el usuario');
                }
            }else {
                $entityManager->rollback();
                return new Response('Error localizando el usuario');
            }
            $bizum = $entityManager->getRepository(Bizum::class)->findOneBy(array('user' => $user));
            if ($bizum !== null) {
                $bizum->setTelefono($request->get('movil'));
                $entityManager->flush();
            } else {
                $bizum = new Bizum();
                $bizum->setTelefono($request->get('movil'));
                $bizum->setUser($user);
                $entityManager->persist($bizum);
                $entityManager->flush();
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la información del método de pago bizum');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }

    /**
     * @Route("/transferencia", name="app_metodo_de_pago_transferencia", options={"expose"=true}, methods={"GET", "POST"})
     * @param EntityManagerInterface $entityManager
     * @param Request $request
     * @return Response
     */
    public function transferencia(EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->beginTransaction();

        //Actualizar el método de pago transferencia
        try {
            $userId = $this->getUser();
            if ($userId !== null) {
                $user = $entityManager->getRepository(User::class)->find($userId->getId());
                if ($user === null) {
                    $entityManager->rollback();
                    return new Response('Error localizando el usuario');
                }
            }else {
                $entityManager->rollback();
                return new Response('Error localizando el usuario');
            }
            $transferencia = $entityManager->getRepository(TransferenciaBancaria::class)->findOneBy(array('user' => $user));
            if ($transferencia !== null) {
                $transferencia->setNumerocuenta($request->get('cuenta'));
                $transferencia->setTitular($request->get('titular'));
                $entityManager->flush();
            } else {
                $transferencia = new TransferenciaBancaria();
                $transferencia->setNumerocuenta($request->get('cuenta'));
                $transferencia->setTitular($request->get('titular'));
                $transferencia->setUser($user);
                $entityManager->persist($transferencia);
                $entityManager->flush();
            }
        } catch (Exception) {
            $entityManager->rollback();
            return new Response('Error registrando la información del método de pago por transferencia');
        }

        //Persistiendo en todas las entidades
        $entityManager->commit();

        return new Response('ok');
    }


}

