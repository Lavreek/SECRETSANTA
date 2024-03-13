<?php

namespace ContainerQlEauvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZxVEFMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fZxVEFM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fZxVEFM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AuthController::login' => ['privates', '.service_locator.ms7Mz4b', 'get_ServiceLocator_Ms7Mz4bService', true],
            'App\\Controller\\AuthController::register' => ['privates', '.service_locator.HT4rftb', 'get_ServiceLocator_HT4rftbService', true],
            'App\\Controller\\AuthController::verifyUserEmail' => ['privates', '.service_locator.920S.Ym', 'get_ServiceLocator_920S_YmService', true],
            'App\\Controller\\GameController::gameBuild' => ['privates', '.service_locator.mIp9O3x', 'get_ServiceLocator_MIp9O3xService', true],
            'App\\Controller\\GameController::gameIdentifier' => ['privates', '.service_locator.fmp8pCt', 'get_ServiceLocator_Fmp8pCtService', true],
            'App\\Controller\\GameController::gameSearch' => ['privates', '.service_locator.mIp9O3x', 'get_ServiceLocator_MIp9O3xService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AuthController:login' => ['privates', '.service_locator.ms7Mz4b', 'get_ServiceLocator_Ms7Mz4bService', true],
            'App\\Controller\\AuthController:register' => ['privates', '.service_locator.HT4rftb', 'get_ServiceLocator_HT4rftbService', true],
            'App\\Controller\\AuthController:verifyUserEmail' => ['privates', '.service_locator.920S.Ym', 'get_ServiceLocator_920S_YmService', true],
            'App\\Controller\\GameController:gameBuild' => ['privates', '.service_locator.mIp9O3x', 'get_ServiceLocator_MIp9O3xService', true],
            'App\\Controller\\GameController:gameIdentifier' => ['privates', '.service_locator.fmp8pCt', 'get_ServiceLocator_Fmp8pCtService', true],
            'App\\Controller\\GameController:gameSearch' => ['privates', '.service_locator.mIp9O3x', 'get_ServiceLocator_MIp9O3xService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AuthController::login' => '?',
            'App\\Controller\\AuthController::register' => '?',
            'App\\Controller\\AuthController::verifyUserEmail' => '?',
            'App\\Controller\\GameController::gameBuild' => '?',
            'App\\Controller\\GameController::gameIdentifier' => '?',
            'App\\Controller\\GameController::gameSearch' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AuthController:login' => '?',
            'App\\Controller\\AuthController:register' => '?',
            'App\\Controller\\AuthController:verifyUserEmail' => '?',
            'App\\Controller\\GameController:gameBuild' => '?',
            'App\\Controller\\GameController:gameIdentifier' => '?',
            'App\\Controller\\GameController:gameSearch' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}