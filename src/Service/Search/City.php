<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Service\Search;

use Igzard\HuncityPhp\Contract\Searchable;

class City extends Searchable
{
    public function search(string $needle): array
    {
        $cities = require __DIR__.'/../../../data/generated/_cities.php';
        $needle = strtolower($needle);

        return $cities[$needle] ?? [];
    }
}
