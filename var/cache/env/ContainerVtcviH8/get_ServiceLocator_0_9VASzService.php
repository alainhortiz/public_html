<?php

namespace ContainerVtcviH8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0_9VASzService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.0.9VASz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0.9VASz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'stock' => ['privates', '.errored..service_locator.0.9VASz.App\\Entity\\Producto', NULL, 'Cannot autowire service ".service_locator.0.9VASz": it references class "App\\Entity\\Producto" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'stock' => 'App\\Entity\\Producto',
        ]);
    }
}