<?php

namespace ContainerVtcviH8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GS0ZGB6Service extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.gS0ZGB6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gS0ZGB6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}