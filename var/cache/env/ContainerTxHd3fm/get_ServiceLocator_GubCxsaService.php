<?php

namespace ContainerTxHd3fm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GubCxsaService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.GubCxsa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GubCxsa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'solicitarPagoRoyalAcumulado' => ['privates', '.errored..service_locator.GubCxsa.App\\Entity\\SolicitarPagoRoyalAcumulado', NULL, 'Cannot autowire service ".service_locator.GubCxsa": it references class "App\\Entity\\SolicitarPagoRoyalAcumulado" but no such service exists.'],
            'solicitarPagoRoyalAcumuladoRepository' => ['privates', 'App\\Repository\\SolicitarPagoRoyalAcumuladoRepository', 'getSolicitarPagoRoyalAcumuladoRepositoryService', true],
        ], [
            'entityManager' => '?',
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'solicitarPagoRoyalAcumulado' => 'App\\Entity\\SolicitarPagoRoyalAcumulado',
            'solicitarPagoRoyalAcumuladoRepository' => 'App\\Repository\\SolicitarPagoRoyalAcumuladoRepository',
        ]);
    }
}
