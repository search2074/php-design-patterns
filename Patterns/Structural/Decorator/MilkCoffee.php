<?php

declare(strict_types=1);

namespace Patterns\Structural\Decorator;

class MilkCoffee extends CoffeeDecorator
{
    const PRICE = 30;

    public function getCost(): int
    {
        return $this->coffee->getCost() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ', молоко';
    }
}