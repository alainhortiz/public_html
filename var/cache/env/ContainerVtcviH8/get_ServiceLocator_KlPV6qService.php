<?php

namespace ContainerVtcviH8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KlPV6qService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.klP_v6q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.klP_v6q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'ventaRepository' => ['privates', 'App\\Repository\\VentaRepository', 'getVentaRepositoryService', true],
        ], [
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
            'ventaRepository' => 'App\\Repository\\VentaRepository',
        ]);
    }
}
