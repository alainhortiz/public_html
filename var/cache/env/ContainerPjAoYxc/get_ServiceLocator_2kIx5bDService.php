<?php

namespace ContainerPjAoYxc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2kIx5bDService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.2kIx5bD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2kIx5bD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'producto' => ['privates', '.errored..service_locator.2kIx5bD.App\\Entity\\Producto', NULL, 'Cannot autowire service ".service_locator.2kIx5bD": it references class "App\\Entity\\Producto" but no such service exists.'],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'producto' => 'App\\Entity\\Producto',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}