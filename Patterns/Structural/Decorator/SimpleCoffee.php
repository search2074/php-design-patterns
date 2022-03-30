<?php

declare(strict_types=1);

namespace Patterns\Structural\Decorator;

class SimpleCoffee implements Coffee
{
    public function getCost(): int
    {
        return 50;
    }

    public function getDescription(): string
    {
        return 'Простой кофе';
    }
}