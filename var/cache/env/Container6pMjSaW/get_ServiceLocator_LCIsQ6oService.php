<?php

namespace Container6pMjSaW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LCIsQ6oService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.lCIsQ6o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lCIsQ6o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ingresoSaldoRepository' => ['privates', 'App\\Repository\\IngresoSaldoRepository', 'getIngresoSaldoRepositoryService', true],
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
        ], [
            'ingresoSaldoRepository' => 'App\\Repository\\IngresoSaldoRepository',
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
        ]);
    }
}