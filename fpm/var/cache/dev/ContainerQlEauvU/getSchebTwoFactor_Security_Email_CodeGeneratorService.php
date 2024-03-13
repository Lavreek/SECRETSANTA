<?php

namespace ContainerQlEauvU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_Security_Email_CodeGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'scheb_two_factor.security.email.code_generator' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Email\Generator\CodeGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['scheb_two_factor.security.email.code_generator'] = $container->createProxy('CodeGeneratorGhost5b1eea4', static fn () => \CodeGeneratorGhost5b1eea4::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-email/Security/TwoFactor/Provider/Email/Generator/CodeGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-email/Security/TwoFactor/Provider/Email/Generator/CodeGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-email/Mailer/AuthCodeMailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-email/Mailer/SymfonyAuthCodeMailer.php';

        return ($lazyLoad->__construct(($container->privates['scheb_two_factor.persister.doctrine'] ?? $container->load('getSchebTwoFactor_Persister_DoctrineService')), new \Scheb\TwoFactorBundle\Mailer\SymfonyAuthCodeMailer(($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), 'noreply@yourdwell.ru', 'Secret Santa'), 4) && false ?: $lazyLoad);
    }
}