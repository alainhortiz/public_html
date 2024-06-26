<?php

namespace ContainerVtcviH8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B8tjzspService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.B8tjzsp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B8tjzsp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'notificacionRepository' => ['privates', 'App\\Repository\\NotificacionRepository', 'getNotificacionRepositoryService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', true],
        ], [
            'mailer' => '?',
            'notificacionRepository' => 'App\\Repository\\NotificacionRepository',
            'translator' => '?',
        ]);
    }
}
