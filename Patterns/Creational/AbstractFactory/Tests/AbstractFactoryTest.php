<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Tests;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\AbstractFactory\FactoryProducer;

class AbstractFactoryTest extends TestCase
{
    public function test_iphone()
    {
        $phoneFactory = FactoryProducer::getFactory('PhoneFactory');
        $phone = $phoneFactory->getPhone('IPhone');
        $phone->call();
        $this->expectOutputString('IPhone call');
    }

    public function test_android_phone()
    {
        $phoneFactory = FactoryProducer::getFactory('PhoneFactory');
        $phone = $phoneFactory->getPhone('AndroidPhone');
        $phone->call();
        $this->expectOutputString('AndroidPhone call');
    }

    public function test_lg_tv()
    {
        $phoneFactory = FactoryProducer::getFactory('TVFactory');
        $tv = $phoneFactory->getTV('LgTV');
        $this->assertSame($tv->getBrand(), 'LG');
    }

    public function test_samsung_tv()
    {
        $phoneFactory = FactoryProducer::getFactory('TVFactory');
        $tv = $phoneFactory->getTV('SamsungTV');
        $this->assertSame($tv->getBrand(), 'Samsung');
    }
}