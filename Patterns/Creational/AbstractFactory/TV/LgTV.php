<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\TV;

class LgTV implements TV
{
    public function getBrand(): string
    {
        return "LG";
    }
}