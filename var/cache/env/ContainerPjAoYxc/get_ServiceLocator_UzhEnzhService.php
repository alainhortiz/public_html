<?php

namespace ContainerPjAoYxc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UzhEnzhService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.uzhEnzh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uzhEnzh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'westerunionRepository' => ['privates', 'App\\Repository\\WesterunionRepository', 'getWesterunionRepositoryService', true],
        ], [
            'authenticationUtils' => '?',
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
            'westerunionRepository' => 'App\\Repository\\WesterunionRepository',
        ]);
    }
}