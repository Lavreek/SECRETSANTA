<?php

namespace ContainerH5WxGga;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-email/Security/TwoFactor/Provider/Email/Generator/CodeGeneratorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-email/Security/TwoFactor/Provider/Email/Generator/CodeGenerator.php';

class CodeGeneratorGhost5b1eea4 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Email\Generator\CodeGenerator implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'digits' => [parent::class, 'digits', parent::class],
        "\0".parent::class."\0".'mailer' => [parent::class, 'mailer', parent::class],
        "\0".parent::class."\0".'persister' => [parent::class, 'persister', parent::class],
        'digits' => [parent::class, 'digits', parent::class],
        'mailer' => [parent::class, 'mailer', parent::class],
        'persister' => [parent::class, 'persister', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('CodeGeneratorGhost5b1eea4', false)) {
    \class_alias(__NAMESPACE__.'\\CodeGeneratorGhost5b1eea4', 'CodeGeneratorGhost5b1eea4', false);
}
