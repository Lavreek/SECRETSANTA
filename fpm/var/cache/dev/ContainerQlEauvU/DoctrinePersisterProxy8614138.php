<?php

namespace ContainerQlEauvU;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/PersisterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Model/Persister/DoctrinePersister.php';

class DoctrinePersisterProxy8614138 extends \Scheb\TwoFactorBundle\Model\Persister\DoctrinePersister implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyProxyTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'om' => [parent::class, 'om', parent::class],
        'om' => [parent::class, 'om', parent::class],
    ];

    public function persist(object $user): void
    {
        if (isset($this->lazyObjectState)) {
            ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->persist(...\func_get_args());
        } else {
            parent::persist(...\func_get_args());
        }
    }
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('DoctrinePersisterProxy8614138', false)) {
    \class_alias(__NAMESPACE__.'\\DoctrinePersisterProxy8614138', 'DoctrinePersisterProxy8614138', false);
}
