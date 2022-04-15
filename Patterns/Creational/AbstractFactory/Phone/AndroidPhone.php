<?php

declare(strict_types=1);

namespace Patterns\Creational\AbstractFactory\Phone;

class AndroidPhone implements Phone
{
    public function call(): void
    {
        echo "AndroidPhone call";
    }
}
