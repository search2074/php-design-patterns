<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

class FactoryProducer
{
    public static array $namespaces = [
        'PhoneFactory' => 'Patterns\Creational\AbstractFactory\Phone\PhoneFactory',
        'TVFactory' => 'Patterns\Creational\AbstractFactory\TV\TVFactory',
    ];

    public static function getFactory(string $productType): ProductFactory
    {
        return new self::$namespaces[$productType];
    }
}