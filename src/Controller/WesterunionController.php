<?php

namespace App\Controller;

use App\Entity\Westerunion;
use App\Form\WesterunionType;
use App\Repository\NotificacionRepository;
use App\Repository\UserRepository;
use App\Repository\WesterunionRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/westerunion")
 */
class WesterunionController extends AbstractController
{
    /**
     * @Route("/", name="app_westerunion_index", methods={"GET"})
     * @param WesterunionRepository $westerunionRepository
     * @param AuthenticationUtils $authenticationUtils
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(WesterunionRepository $westerunionRepository, AuthenticationUtils $authenticationUtils, UserRepository $userRepository,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('westerunion/index.html.twig', [
            'users' => $userRepository->findAll(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'westerunions' => $westerunionRepository->findAll(),
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 1,
            'vp' => 0,
            'royaltiesp' => 0,
            'asignars' => 0,
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
     * @Route("/new", name="app_westerunion_new", methods={"GET", "POST"})
     * @param Request $request
     * @param WesterunionRepository $westerunionRepository
     * @param UserRepository $userRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public
    function new(Request $request, WesterunionRepository $westerunionRepository, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);
        $idd = $userRepository->findById($id[0]['id']);
        $westerunion = new Westerunion();
        $form = $this->createForm(WesterunionType::class, $westerunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (count($westerunionRepository->findAll()) == 1) {
                return $this->renderForm('westerunion/new.html.twig', [
                    'westerunion' => $westerunion,
                    'form' => $form,
                    'msj' => 1
                ]);
            } else {
                $westerunion->setUsuarioid($idd[0]);
                $westerunionRepository->add($westerunion);
                return $this->redirectToRoute('app_westerunion_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('westerunion/new.html.twig', [
            'westerunion' => $westerunion,
            'form' => $form,
            'msj' => 0
        ]);
    }

    /**
     * @Route("/{id}", name="app_westerunion_show", methods={"GET"})
     * @param Westerunion $westerunion
     * @param AuthenticationUtils $authenticationUtils
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function show(Westerunion $westerunion, AuthenticationUtils $authenticationUtils, UserRepository $userRepository,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('westerunion/show.html.twig', [
            'users' => $userRepository->findAll(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'westerunion' => $westerunion,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'recogida' => 0,
            'asignars' => 0,
            'usuar' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 0,
            'service' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 1,
            'vp' => 0,
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
     * @Route("/{id}/edit", name="app_westerunion_edit", methods={"GET", "POST"})
     * @param Request $request
     * @param Westerunion $westerunion
     * @param WesterunionRepository $westerunionRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function edit(Request $request, Westerunion $westerunion, WesterunionRepository $westerunionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(WesterunionType::class, $westerunion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $westerunionRepository->add($westerunion);
            return $this->redirectToRoute('app_westerunion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('westerunion/edit.html.twig', [
            'westerunion' => $westerunion,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_westerunion_delete", methods={"POST"})
     * @param Request $request
     * @param Westerunion $westerunion
     * @param WesterunionRepository $westerunionRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Request $request, Westerunion $westerunion, WesterunionRepository $westerunionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $westerunion->getId(), $request->request->get('_token'))) {
            $westerunionRepository->remove($westerunion);
        }

        return $this->redirectToRoute('app_westerunion_index', [], Response::HTTP_SEE_OTHER);
    }
}
