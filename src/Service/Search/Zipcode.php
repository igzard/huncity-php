<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Service\Search;

use Igzard\HuncityPhp\Contract\Searchable;

class Zipcode extends Searchable
{
    public function search(string $needle): array
    {
        $zipcodes = require __DIR__.'/../../../data/generated/_zipcodes.php';
        $needle = strtolower($needle);

        return $zipcodes[$needle] ? \array_slice($zipcodes[$needle], 0, $this->limit) : [];
    }
}
