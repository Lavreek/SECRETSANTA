<?php

namespace ContainerQlEauvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Twig\Runtime\AuthRuntime' shared autowired service.
     *
     * @return \App\Twig\Runtime\AuthRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Twig/Runtime/AuthRuntime.php';

        $container->services['App\\Twig\\Runtime\\AuthRuntime'] = $instance = new \App\Twig\Runtime\AuthRuntime(($container->services['doctrine'] ?? self::getDoctrineService($container)));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Twig\\Runtime\\AuthRuntime', $container));

        return $instance;
    }
}
