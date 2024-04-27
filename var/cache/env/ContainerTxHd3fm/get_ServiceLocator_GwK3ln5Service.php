<?php

namespace ContainerTxHd3fm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GwK3ln5Service extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.gwK3ln5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gwK3ln5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pagoRoyalAcumuladoRepository' => ['privates', 'App\\Repository\\SolicitarPagoRoyalAcumuladoRepository', 'getSolicitarPagoRoyalAcumuladoRepositoryService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
            'solicitarPagoRoyalAcumulado' => ['privates', '.errored..service_locator.gwK3ln5.App\\Entity\\SolicitarPagoRoyalAcumulado', NULL, 'Cannot autowire service ".service_locator.gwK3ln5": it references class "App\\Entity\\SolicitarPagoRoyalAcumulado" but no such service exists.'],
            'solicitarPagoRoyalAcumuladoRepository' => ['privates', 'App\\Repository\\SolicitarPagoRoyalAcumuladoRepository', 'getSolicitarPagoRoyalAcumuladoRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'pagoRoyalAcumuladoRepository' => 'App\\Repository\\SolicitarPagoRoyalAcumuladoRepository',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
            'solicitarPagoRoyalAcumulado' => 'App\\Entity\\SolicitarPagoRoyalAcumulado',
            'solicitarPagoRoyalAcumuladoRepository' => 'App\\Repository\\SolicitarPagoRoyalAcumuladoRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
