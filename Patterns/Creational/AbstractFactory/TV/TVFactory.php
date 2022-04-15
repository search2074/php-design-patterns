<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\TV;

use Patterns\Creational\AbstractFactory\Phone\Phone;
use Patterns\Creational\AbstractFactory\ProductFactory;

class TVFactory implements ProductFactory
{
    public function getPhone(string $phoneType): ?Phone
    {
        return null;
    }

    public function getTV(string $tvType): ?TV
    {
        if(empty($tvType)) {
            return null;
        }

        $class = "Patterns\\Creational\\AbstractFactory\\TV\\".$tvType;
        return new $class;
    }

}