<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp;

use Igzard\HuncityPhp\Contract\Searchable;

final class CitySearcher
{
    private Searchable $searchable;

    public function __construct()
    {
        $this->searchable = (new Service\Search\City());
    }

    public function findBy(Searchable $searchable): self
    {
        $this->searchable = $searchable;

        return $this;
    }

    public function find(string $needle): array
    {
        return $this->searchable->search($needle);
    }
}
