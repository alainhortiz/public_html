<?php

namespace App\Controller;

use App\Entity\TipoNotificacion;
use App\Form\TipoNotificacionType;
use App\Repository\NotificacionRepository;
use App\Repository\TipoNotificacionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/tipo/notificacion')]
class TipoNotificacionController extends AbstractController
{
    #[Route('/', name: 'app_tipo_notificacion_index', methods: ['GET'])]
    public function index(TipoNotificacionRepository $tipoNotificacionRepository, NotificacionRepository $notificacionRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('tipo_notificacion/index.html.twig', [
            'tipo_notificacions' => $tipoNotificacionRepository->findBy(['correo'=> true]),
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'royaltiesp' => 0,
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
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'asignars'=>0,
            'ventastotal' => 0,
            'totals' => 0,
            'totalv' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 1
        ]);
    }

    #[Route('/new', name: 'app_tipo_notificacion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        $tipoNotificacion = new TipoNotificacion();
        $form = $this->createForm(TipoNotificacionType::class, $tipoNotificacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tipoNotificacionRepository->save($tipoNotificacion, true);

            return $this->redirectToRoute('app_tipo_notificacion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tipo_notificacion/new.html.twig', [
            'tipo_notificacion' => $tipoNotificacion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tipo_notificacion_show', methods: ['GET'])]
    public function show(TipoNotificacion $tipoNotificacion): Response
    {
        return $this->render('tipo_notificacion/show.html.twig', [
            'tipo_notificacion' => $tipoNotificacion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tipo_notificacion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TipoNotificacion $tipoNotificacion, TipoNotificacionRepository $tipoNotificacionRepository, NotificacionRepository $notificacionRepository): Response
    {
        $form = $this->createForm(TipoNotificacionType::class, $tipoNotificacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tipoNotificacionRepository->save($tipoNotificacion, true);

            return $this->redirectToRoute('app_tipo_notificacion_index', [], Response::HTTP_SEE_OTHER);
        }

        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('tipo_notificacion/edit.html.twig', [
            'tipo_notificacion' => $tipoNotificacion,
            'form' => $form,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'royaltiesp' => 0,
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
            'retir' => 0,
            'hist' => 0,
            'buy' => 0,
            'vp' => 0,
            'vs' => 0,
            'asignars'=>0,
            'ventastotal' => 0,
            'totals' => 0,
            'totalv' => 0,
            'canceladas' => 0,
            'estad' => 0,
            'estadUser' => 0,
            'direcc' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 1
        ]);
    }

    #[Route('/{id}', name: 'app_tipo_notificacion_delete', methods: ['POST'])]
    public function delete(Request $request, TipoNotificacion $tipoNotificacion, TipoNotificacionRepository $tipoNotificacionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoNotificacion->getId(), $request->request->get('_token'))) {
            $tipoNotificacionRepository->remove($tipoNotificacion, true);
        }

        return $this->redirectToRoute('app_tipo_notificacion_index', [], Response::HTTP_SEE_OTHER);
    }
}
