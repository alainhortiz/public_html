<?php

namespace ContainerPjAoYxc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWeasyprint_PdfService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'weasyprint.pdf' shared service.
     *
     * @return \Pontedilana\PhpWeasyPrint\Pdf
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pontedilana'.\DIRECTORY_SEPARATOR.'php-weasyprint'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pontedilana'.\DIRECTORY_SEPARATOR.'php-weasyprint'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pontedilana'.\DIRECTORY_SEPARATOR.'php-weasyprint'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Pdf.php';

        $container->services['weasyprint.pdf'] = $instance = new \Pontedilana\PhpWeasyPrint\Pdf('weasyprint', [], []);

        $instance->setLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }
}