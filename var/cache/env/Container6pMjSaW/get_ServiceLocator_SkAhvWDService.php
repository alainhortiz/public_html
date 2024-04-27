<?php

namespace Container6pMjSaW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SkAhvWDService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.skAhvWD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.skAhvWD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tipoNotificacion' => ['privates', '.errored..service_locator.skAhvWD.App\\Entity\\TipoNotificacion', NULL, 'Cannot autowire service ".service_locator.skAhvWD": it references class "App\\Entity\\TipoNotificacion" but no such service exists.'],
        ], [
            'tipoNotificacion' => 'App\\Entity\\TipoNotificacion',
        ]);
    }
}
