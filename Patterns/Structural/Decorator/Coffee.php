<?php

declare(strict_types=1);

namespace Patterns\Structural\Decorator;

interface Coffee
{
    public function getCost(): int;
    public function getDescription(): string;
}