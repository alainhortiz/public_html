<?php

namespace App\Controller;

use App\Entity\Notificacion;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/notificaciones")
 */
class NotificacionesController extends AbstractController
{

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/inactivos/{tipo}", name="app_notificaciones_user_inactivos", methods={"GET"})
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function inactivos(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_user_inactivos');
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/producto/agotado/{tipo}", name="app_notificaciones_producto_agotado", methods={"GET"})
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function agotado(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_producto_agotado_index');
    }

    /**
     * @Route("/solicitar/recogida/{tipo}", name="app_notificaciones_solicitar_recogida", methods={"GET"})
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function recogida(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_solicitar_recogida_index');
    }

    /**
     * @Route("/solicitar/pago/{tipo}", name="app_notificaciones_solicitar_pago_royal_acumulado", methods={"GET"})
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function acumulado(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_solicitar_pago_royal_acumulado_index');
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/asignar/producto/{tipo}", name="app_notificaciones_asignar_producto")
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function producto(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_asignar_producto');
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/servicios/asignados/{tipo}", name="app_notificaciones_servicios_asignados")
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function asignados(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_servicios_asignados');
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/retiros/saldos/acumulados/{tipo}", name="app_notificaciones_retiros_saldos_acumulados")
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function retiro(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_historial_retiro_saldo_index');
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/ingresos/saldos/acumulados/{tipo}", name="app_notificaciones_ingresos_saldos_acumulados")
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function ingreso(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_ingreso_saldo_index');
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/producto/agotado/user/{tipo}", name="app_notificaciones_producto_agotado_user", methods={"GET"})
     * @param ManagerRegistry $doctrine
     * @param int $tipo
     * @return RedirectResponse
     */
    public function agotadoUser(ManagerRegistry $doctrine, int $tipo): RedirectResponse
    {

        $em = $doctrine->getManager();
        $notificaciones = $em->getRepository(Notificacion::class)->findBy(array('tipo' => $tipo));

        if (!$notificaciones) {
            throw $this->createNotFoundException(
                'No existe la notificación '
            );
        }

        foreach ($notificaciones as $notificacion) {
            $notificacion->setEstado(true);
        }

        $em->flush();

        return $this->redirectToRoute('app_producto_agotado_user');
    }

}
