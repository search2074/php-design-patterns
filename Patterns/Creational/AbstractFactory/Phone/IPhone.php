<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Phone;

class IPhone implements Phone
{
    public function call(): void
    {
        echo "IPhone call";
    }
}
