<?php

namespace App\Controller;

use App\Entity\Bizum;
use App\Form\BizumType;
use App\Repository\BizumRepository;
use App\Repository\NotificacionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/bizum")
 */
class BizumController extends AbstractController
{
    /**
     * @Route("/", name="app_bizum_index", methods={"GET"})
     * @param BizumRepository $bizumRepository
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(BizumRepository $bizumRepository, UserRepository $userRepository,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('bizum/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'users' => $userRepository->findAll(),
            'bizums' => $bizumRepository->findAll(),
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
            'retir' => 0,
            'hist' => 0,
            'buy' => 1,
            'vp' => 0,
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
     * @Route("/new", name="app_bizum_new", methods={"GET", "POST"})
     * @param Request $request
     * @param BizumRepository $bizumRepository
     * @param UserRepository $userRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function new(Request $request, BizumRepository $bizumRepository, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $bizum = new Bizum();
        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);
        $idd = $userRepository->findById($id[0]['id']);
        $form = $this->createForm(BizumType::class, $bizum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (count($bizumRepository->findAll()) == 1) {
                return $this->renderForm('bizum/new.html.twig', [
                    'bizum' => $bizum,
                    'form' => $form,
                    'msj' => 1
                ]);
            } else {
                $bizum->setUsuarioid($idd[0]);
                $bizumRepository->add($bizum);
                return $this->redirectToRoute('app_bizum_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('bizum/new.html.twig', [
            'bizum' => $bizum,
            'form' => $form,
            'msj' => 0
        ]);
    }

    /**
     * @Route("/{id}", name="app_bizum_show", methods={"GET"})
     * @param Bizum $bizum
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function show(Bizum $bizum,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('bizum/show.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'bizum' => $bizum,
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
            'asignars' => 0,
            'retir' => 0,
            'hist' => 0,
            'buy' => 1,
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
     * @Route("/{id}/edit", name="app_bizum_edit", methods={"GET", "POST"})
     * @param Request $request
     * @param Bizum $bizum
     * @param BizumRepository $bizumRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function edit(Request $request, Bizum $bizum, BizumRepository $bizumRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(BizumType::class, $bizum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bizumRepository->add($bizum);
            return $this->redirectToRoute('app_bizum_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bizum/edit.html.twig', [
            'bizum' => $bizum,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_bizum_delete", methods={"POST"})
     * @param Request $request
     * @param Bizum $bizum
     * @param BizumRepository $bizumRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Request $request, Bizum $bizum, BizumRepository $bizumRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $bizum->getId(), $request->request->get('_token'))) {
            $bizumRepository->remove($bizum);
        }

        return $this->redirectToRoute('app_bizum_index', [], Response::HTTP_SEE_OTHER);
    }
}
