<?php

namespace ContainerTxHd3fm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M7bHCHService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.m7b_hCH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m7b_hCH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'tipoNotificacionRepository' => ['privates', 'App\\Repository\\TipoNotificacionRepository', 'getTipoNotificacionRepositoryService', true],
        ], [
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'tipoNotificacionRepository' => 'App\\Repository\\TipoNotificacionRepository',
        ]);
    }
}
