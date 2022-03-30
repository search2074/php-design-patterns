<?php

declare(strict_types=1);

namespace Patterns\Structural\Decorator\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Structural\Decorator\MilkCoffee;
use Patterns\Structural\Decorator\SimpleCoffee;

class DecoratorTest extends TestCase
{
    public function test_can_calculate_price_for_simple_coffee()
    {
        $coffee = new SimpleCoffee();

        $this->assertEquals(50, $coffee->getCost());
        $this->assertEquals('Простой кофе', $coffee->getDescription());
    }

    public function test_can_calculate_price_for_simple_coffee_with_milk()
    {
        $coffee = new SimpleCoffee();
        // декорируем кофе с молоком
        $coffee = new MilkCoffee($coffee);

        $this->assertEquals(80, $coffee->getCost());
        $this->assertEquals('Простой кофе, молоко', $coffee->getDescription());
    }
}