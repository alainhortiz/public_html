<?php

namespace Container6pMjSaW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6ZQgFDService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.6ZQgF_d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6ZQgF_d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'packRepository' => ['privates', 'App\\Repository\\PackRepository', 'getPackRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'packRepository' => 'App\\Repository\\PackRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
