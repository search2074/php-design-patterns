<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory;

use Patterns\Creational\AbstractFactory\TV\TV;
use Patterns\Creational\AbstractFactory\Phone\Phone;

interface ProductFactory
{
    public function getPhone(string $phoneType): ?Phone;
    public function getTV(string $tvType): ?TV;
}