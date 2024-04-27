<?php

namespace ContainerVtcviH8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7Rzhx60Service extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.7Rzhx60' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7Rzhx60'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'transferenciaBancariaRepository' => ['privates', 'App\\Repository\\TransferenciaBancariaRepository', 'getTransferenciaBancariaRepositoryService', true],
            'transferenciaBancarium' => ['privates', '.errored..service_locator.7Rzhx60.App\\Entity\\TransferenciaBancaria', NULL, 'Cannot autowire service ".service_locator.7Rzhx60": it references class "App\\Entity\\TransferenciaBancaria" but no such service exists.'],
        ], [
            'transferenciaBancariaRepository' => 'App\\Repository\\TransferenciaBancariaRepository',
            'transferenciaBancarium' => 'App\\Entity\\TransferenciaBancaria',
        ]);
    }
}