<?php

declare(strict_types=1);

namespace Patterns\Behavioral\Iterator;

class DataIterator implements \Iterator
{
    private int $position = 0;
    private array $items;

    public function addItem(string $item)
    {
        $this->items[] = $item;
    }

    public function current(): mixed
    {
        return $this->items[$this->position];
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function key(): mixed
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}