<?php

namespace ContainerQlEauvU;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/TwoFactorFormRendererInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Provider/DefaultTwoFactorFormRenderer.php';

class DefaultTwoFactorFormRendererGhost3f31ba7 extends \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'template' => [parent::class, 'template', parent::class],
        "\0".parent::class."\0".'templateVars' => [parent::class, 'templateVars', parent::class],
        "\0".parent::class."\0".'twigEnvironment' => [parent::class, 'twigEnvironment', parent::class],
        'template' => [parent::class, 'template', parent::class],
        'templateVars' => [parent::class, 'templateVars', parent::class],
        'twigEnvironment' => [parent::class, 'twigEnvironment', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DefaultTwoFactorFormRendererGhost3f31ba7', false)) {
    \class_alias(__NAMESPACE__.'\\DefaultTwoFactorFormRendererGhost3f31ba7', 'DefaultTwoFactorFormRendererGhost3f31ba7', false);
}
