<?php

namespace ContainerTxHd3fm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S0Dl95WService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.S0Dl95W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.S0Dl95W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'tipoNotificacionRepository' => ['privates', 'App\\Repository\\TipoNotificacionRepository', 'getTipoNotificacionRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.S0Dl95W.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.S0Dl95W": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'tipoNotificacionRepository' => 'App\\Repository\\TipoNotificacionRepository',
            'user' => 'App\\Entity\\User',
        ]);
    }
}