<?php

namespace ContainerODx47uF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSass_Command_BuildService extends App_KernelProdContainer
{
    /*
     * Gets the private 'sass.command.build' shared service.
     *
     * @return \Symfonycasts\SassBundle\Command\SassBuildCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['sass.command.build'] = $instance = new \Symfonycasts\SassBundle\Command\SassBuildCommand(($container->privates['sass.builder'] ?? $container->load('getSass_BuilderService')));

        $instance->setName('sass:build');
        $instance->setDescription('Builds the Sass assets');

        return $instance;
    }
}