<?php

namespace ContainerTxHd3fm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sd36ndxService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.sd36ndx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sd36ndx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'direccionRecogidaRepository' => ['privates', 'App\\Repository\\DireccionRecogidaRepository', 'getDireccionRecogidaRepositoryService', true],
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'direccionRecogidaRepository' => 'App\\Repository\\DireccionRecogidaRepository',
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
