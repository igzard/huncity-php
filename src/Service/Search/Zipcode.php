<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Service\Search;

use Igzard\HuncityPhp\Contract\Searchable;

class Zipcode extends Searchable
{
    private const string INDEX_FILE = __DIR__.'/../../../data/generated/_zipcodes.php';

    public function search(string $needle): array
    {
        $zipcodes = require self::INDEX_FILE;

        $needle = strtolower($needle);

        return isset($zipcodes[$needle]) ? \array_slice($zipcodes[$needle], 0, $this->limit) : [];
    }
}
