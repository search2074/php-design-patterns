<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Phone;

use Patterns\Creational\AbstractFactory\TV\TV;
use Patterns\Creational\AbstractFactory\ProductFactory;

class PhoneFactory implements ProductFactory
{
    public function getPhone(string $phoneType): ?Phone
    {
        if(empty($phoneType)) {
            return null;
        }
        $class = "Patterns\\Creational\\AbstractFactory\\Phone\\".$phoneType;
        return new $class;
    }

    public function getTV(string $tvType): ?TV
    {
        return null;
    }
}