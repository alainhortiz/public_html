<?php

namespace App\Controller;

use App\Entity\TransferenciaBancaria;
use App\Form\TransferenciaBancariaType;
use App\Repository\NotificacionRepository;
use App\Repository\TransferenciaBancariaRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/transferencia_bancaria")
 */
class TransferenciaBancariaController extends AbstractController
{
    /**
     * @Route("/", name="app_transferencia_bancaria_index", methods={"GET"})
     * @param TransferenciaBancariaRepository $transferenciaBancariaRepository
     * @param AuthenticationUtils $authenticationUtils
     * @param UserRepository $userRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(TransferenciaBancariaRepository $transferenciaBancariaRepository, AuthenticationUtils $authenticationUtils, UserRepository $userRepository,NotificacionRepository $notificacionRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('transferencia_bancaria/index.html.twig', [
            'users' => $userRepository->findAll(),
            'transferencia_bancarias' => $transferenciaBancariaRepository->findAll(),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
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
            'asignars' => 0,
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
     * @Route("/new", name="app_transferencia_bancaria_new", methods={"GET", "POST"})
     * @param Request $request
     * @param TransferenciaBancariaRepository $transferenciaBancariaRepository
     * @param UserRepository $userRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function new(Request $request, TransferenciaBancariaRepository $transferenciaBancariaRepository, UserRepository $userRepository): Response
    {
        $userid = $this->getUser()->getUserIdentifier();
        $id = $userRepository->obtenerIDdadoEmail($userid);
        $idd = $userRepository->findById($id[0]['id']);
        $transferenciaBancarium = new TransferenciaBancaria();
        $form = $this->createForm(TransferenciaBancariaType::class, $transferenciaBancarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if (count($transferenciaBancariaRepository->findAll()) == 1) {
                return $this->renderForm('transferencia_bancaria/new.html.twig', [
                    'transferencia_bancarium' => $transferenciaBancarium,
                    'form' => $form,
                    'msj' => 1
                ]);
            } else {
                $transferenciaBancarium->setUsuarioid($idd[0]);
                $transferenciaBancariaRepository->add($transferenciaBancarium);
                return $this->redirectToRoute('app_transferencia_bancaria_index', [], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->renderForm('transferencia_bancaria/new.html.twig', [
            'transferencia_bancarium' => $transferenciaBancarium,
            'form' => $form,
            'msj' => 0
        ]);
    }


    /**
     * @Route("/{id}", name="app_transferencia_bancaria_show", methods={"GET"})
     * @param TransferenciaBancaria $transferenciaBancarium
     * @param AuthenticationUtils $authenticationUtils
     * @param UserRepository $userRepository
     * @return Response
     */
    public function show(TransferenciaBancaria $transferenciaBancarium, AuthenticationUtils $authenticationUtils, UserRepository $userRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('transferencia_bancaria/show.html.twig', [
            'transferencia_bancarium' => $transferenciaBancarium,
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
     * @Route("/{id}/edit", name="app_transferencia_bancaria_edit", methods={"GET", "POST"})
     * @param Request $request
     * @param TransferenciaBancaria $transferenciaBancarium
     * @param TransferenciaBancariaRepository $transferenciaBancariaRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function edit(Request $request, TransferenciaBancaria $transferenciaBancarium, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $form = $this->createForm(TransferenciaBancariaType::class, $transferenciaBancarium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transferenciaBancariaRepository->add($transferenciaBancarium);
            return $this->redirectToRoute('app_transferencia_bancaria_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('transferencia_bancaria/edit.html.twig', [
            'transferencia_bancarium' => $transferenciaBancarium,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_transferencia_bancaria_delete", methods={"POST"})
     * @param Request $request
     * @param TransferenciaBancaria $transferenciaBancarium
     * @param TransferenciaBancariaRepository $transferenciaBancariaRepository
     * @return Response
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function delete(Request $request, TransferenciaBancaria $transferenciaBancarium, TransferenciaBancariaRepository $transferenciaBancariaRepository): Response
    {
        /**
         * Asegurarse que el usuario esta autenticado
         */
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($this->isCsrfTokenValid('delete' . $transferenciaBancarium->getId(), $request->request->get('_token'))) {
            $transferenciaBancariaRepository->remove($transferenciaBancarium);
        }

        return $this->redirectToRoute('app_transferencia_bancaria_index', [], Response::HTTP_SEE_OTHER);
    }
}
