<?php

namespace ContainerPjAoYxc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BdigYA_Service extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.BdigYA.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BdigYA.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'entityManager' => '?',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}
