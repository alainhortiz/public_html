<?php

namespace App\Controller;

use App\Entity\Ayuda;
use App\Form\AyudaType;
use App\Repository\AyudaRepository;
use App\Repository\NotificacionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ayuda')]
class AyudaController extends AbstractController
{
    #[Route('/', name: 'app_ayuda_index', methods: ['GET'])]
    public function index(AyudaRepository $ayudaRepository, NotificacionRepository $notificacionRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('ayuda/index.html.twig', [
            'ayudas' => $ayudaRepository->findAll(),
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
            'asignarp' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    #[Route('/new', name: 'app_ayuda_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AyudaRepository $ayudaRepository, NotificacionRepository $notificacionRepository): Response
    {
        $ayuda = new Ayuda();
        $form = $this->createForm(AyudaType::class, $ayuda);
        $form->handleRequest($request);
        $user = $this->getUser();
        $id = $user->getId();

        if ($form->isSubmitted() && $form->isValid()) {
            $url = $form['url']->getData();
            $result = preg_match("#^https?:\/\/[\w\-]+(\.[\w\-]+)+[/?]?.*$#", $url);

            if ($result == 0) {
                return $this->renderForm('ayuda/new.html.twig', [
                    'ayuda' => $ayuda,
                    'form' => $form,
                    'mensaje' => 1,
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
                    'asignarp' => 0,
                    'pack' => 0,
                    'ing' => 0,
                    'tipoNot' => 0
                ]);
            }else {
                $ayudaRepository->save($ayuda, true);
                return $this->redirectToRoute('app_ayuda_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('ayuda/new.html.twig', [
            'ayuda' => $ayuda,
            'form' => $form,
            'mensaje' => 0,
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
            'asignarp' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    #[Route('/{id}', name: 'app_ayuda_show', methods: ['GET'])]
    public function show(Ayuda $ayuda): Response
    {
        return $this->render('ayuda/show.html.twig', [
            'ayuda' => $ayuda,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ayuda_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ayuda $ayuda, AyudaRepository $ayudaRepository, NotificacionRepository $notificacionRepository): Response
    {
        $form = $this->createForm(AyudaType::class, $ayuda);
        $form->handleRequest($request);
        $user = $this->getUser();
        $id = $user->getId();

        if ($form->isSubmitted() && $form->isValid()) {
            $url = $form['url']->getData();
            $result = preg_match("#^https?:\/\/[\w\-]+(\.[\w\-]+)+[/?]?.*$#", $url);
            if ($result == 0) {
                return $this->renderForm('ayuda/edit.html.twig', [
                    'ayuda' => $ayuda,
                    'form' => $form,
                    'mensaje' => 1,
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
                    'asignarp' => 0,
                    'pack' => 0,
                    'ing' => 0,
                    'tipoNot' => 0
                ]);
            }else {
                $ayudaRepository->save($ayuda, true);
                return $this->redirectToRoute('app_ayuda_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('ayuda/edit.html.twig', [
            'ayuda' => $ayuda,
            'form' => $form,
            'mensaje' => 0,
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
            'asignarp' => 0,
            'pack' => 0,
            'ing' => 0,
            'tipoNot' => 0
        ]);
    }

    #[Route('/{id}', name: 'app_ayuda_delete', methods: ['POST'])]
    public function delete(Request $request, Ayuda $ayuda, AyudaRepository $ayudaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ayuda->getId(), $request->request->get('_token'))) {
            $ayudaRepository->remove($ayuda, true);
        }

        return $this->redirectToRoute('app_ayuda_index', [], Response::HTTP_SEE_OTHER);
    }
}
