<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Service\Search;

use Igzard\HuncityPhp\Contract\Searchable;

class City extends Searchable
{
    private const string INDEX_FILE = __DIR__.'/../../../data/generated/_cities.php';

    public function search(string $needle): array
    {
        $cities = require self::INDEX_FILE;

        $needle = strtolower($needle);

        return isset($cities[$needle]) ? \array_slice($cities[$needle], 0, $this->limit) : [];
    }
}
