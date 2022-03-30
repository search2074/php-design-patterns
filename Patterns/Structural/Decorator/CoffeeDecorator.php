<?php

declare(strict_types=1);

namespace Patterns\Structural\Decorator;

abstract class CoffeeDecorator implements Coffee
{
    public function __construct(protected Coffee $coffee)
    {
    }
}