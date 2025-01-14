<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Contract;

abstract class Searchable
{
    protected int $limit = 10;

    abstract public function search(string $needle): array;

    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }
}
