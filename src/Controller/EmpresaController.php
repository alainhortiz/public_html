<?php

namespace App\Controller;

use App\Entity\Empresa;
use App\Form\EmpresaType;
use App\Repository\EmpresaRepository;
use App\Repository\NotificacionRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/empresa")
 */
class EmpresaController extends AbstractController
{
    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/", name="app_empresa_index", methods={"GET"})
     * @param EmpresaRepository $empresaRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function index(EmpresaRepository $empresaRepository, NotificacionRepository $notificacionRepository): Response
    {
        $user = $this->getUser();
        $id = $user->getId();

        return $this->render('empresa/index.html.twig', [
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'empresas' => $empresaRepository->findAll(),
            'resumen' => 0,
            'ranking' => 0,
            'historial' => 0,
            'royalties' => 0,
            'servicioacum' => 0,
            'royaltiesp' => 0,
            'ventas' => 0,
            'asignar' => 0,
            'asignarp' => 0,
            'recogida' => 0,
            'usuar' => 0,
            'usuarI' => 0,
            'product' => 0,
            'amortizacion' => 0,
            'amortizacionUser' => 0,
            'productAgot' => 0,
            'empres' => 1,
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
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/new", name="app_empresa_new", methods={"GET", "POST"})
     * @param Request $request
     * @param EmpresaRepository $empresaRepository
     * @return Response
     */
    public function new(Request $request, EmpresaRepository $empresaRepository): Response
    {
        $empresa = new Empresa();
        $form = $this->createForm(EmpresaType::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $empresaRepository->add($empresa, true);

            return $this->redirectToRoute('app_empresa_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('empresa/new.html.twig', [
            'empresa' => $empresa,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_empresa_show", methods={"GET"})
     * @param Empresa $empresa
     * @return Response
     */
    public function show(Empresa $empresa): Response
    {
        return $this->render('empresa/show.html.twig', [
            'empresa' => $empresa,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_empresa_edit", methods={"GET", "POST"})
     * @param Request $request
     * @param Empresa $empresa
     * @param EmpresaRepository $empresaRepository
     * @param NotificacionRepository $notificacionRepository
     * @return Response
     */
    public function edit(Request $request, Empresa $empresa, EmpresaRepository $empresaRepository, NotificacionRepository $notificacionRepository): Response
    {
        $form = $this->createForm(EmpresaType::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $empresaRepository->add($empresa, true);

            return $this->redirectToRoute('app_empresa_index', [], Response::HTTP_SEE_OTHER);
        }

        $user = $this->getUser();
        $id = $user->getId();

        return $this->renderForm('empresa/edit.html.twig', [
            'empresa' => $empresa,
            'form' => $form,
            'totalNotificacionesAdmin' => count($notificacionRepository->findBy(array('estado' => false,'tipo' => array('1', '2','3','6')))),
            'totalNotificacionesUser' => count($notificacionRepository->findBy(array('user' => $user,'estado' => false,'tipo'=> array('4', '5','7','8','9','10','11','12','13')))),
            'notificacionesAdmin' => $notificacionRepository->notificacionesAdmin(),
            'notificacionesUser' => $notificacionRepository->notificacionesUser($id),
            'empresas' => $empresaRepository->findAll(),
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
            'empres' => 1,
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
            'tipoNot' => 0
        ]);
    }

    /**
     * @Route("/{id}", name="app_empresa_delete", methods={"POST"})
     * @param Request $request
     * @param Empresa $empresa
     * @param EmpresaRepository $empresaRepository
     * @return Response
     */
    public function delete(Request $request, Empresa $empresa, EmpresaRepository $empresaRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$empresa->getId(), $request->request->get('_token'))) {
            $empresaRepository->remove($empresa, true);
        }

        return $this->redirectToRoute('app_empresa_index', [], Response::HTTP_SEE_OTHER);
    }
}
