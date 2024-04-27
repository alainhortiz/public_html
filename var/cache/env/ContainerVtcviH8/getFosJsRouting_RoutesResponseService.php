<?php

namespace ContainerVtcviH8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_RoutesResponseService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the public 'fos_js_routing.routes_response' shared service.
     *
     * @return \FOS\JsRoutingBundle\Response\RoutesResponse
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'jsrouting-bundle'.\DIRECTORY_SEPARATOR.'Response'.\DIRECTORY_SEPARATOR.'RoutesResponse.php';

        return $container->services['fos_js_routing.routes_response'] = new \FOS\JsRoutingBundle\Response\RoutesResponse();
    }
}
