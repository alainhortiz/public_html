<?php

namespace ContainerTxHd3fm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPdfServiceService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private 'App\Service\PdfService' shared autowired service.
     *
     * @return \App\Service\PdfService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PdfService.php';

        return $container->privates['App\\Service\\PdfService'] = new \App\Service\PdfService();
    }
}
