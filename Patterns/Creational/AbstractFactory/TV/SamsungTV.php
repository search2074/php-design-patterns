<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\TV;

class SamsungTV implements TV
{
    public function getBrand(): string
    {
        return "Samsung";
    }
}