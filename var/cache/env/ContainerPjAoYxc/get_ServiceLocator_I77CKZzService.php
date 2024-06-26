<?php

namespace ContainerPjAoYxc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I77CKZzService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.i77CKZz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i77CKZz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ayuda' => ['privates', '.errored..service_locator.i77CKZz.App\\Entity\\Ayuda', NULL, 'Cannot autowire service ".service_locator.i77CKZz": it references class "App\\Entity\\Ayuda" but no such service exists.'],
            'ayudaRepository' => ['privates', 'App\\Repository\\AyudaRepository', 'getAyudaRepositoryService', true],
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
        ], [
            'ayuda' => 'App\\Entity\\Ayuda',
            'ayudaRepository' => 'App\\Repository\\AyudaRepository',
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
        ]);
    }
}
