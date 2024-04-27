<?php

namespace ContainerTxHd3fm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q1F27w5Service extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.Q1F27w5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q1F27w5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}