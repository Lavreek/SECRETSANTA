<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Game extends \App\Entity\Game implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'end' => [parent::class, 'end', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'identifier' => [parent::class, 'identifier', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'owner' => [parent::class, 'owner', null],
        "\0".parent::class."\0".'shuffled' => [parent::class, 'shuffled', null],
        "\0".parent::class."\0".'start' => [parent::class, 'start', null],
        'end' => [parent::class, 'end', null],
        'id' => [parent::class, 'id', null],
        'identifier' => [parent::class, 'identifier', null],
        'name' => [parent::class, 'name', null],
        'owner' => [parent::class, 'owner', null],
        'shuffled' => [parent::class, 'shuffled', null],
        'start' => [parent::class, 'start', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
