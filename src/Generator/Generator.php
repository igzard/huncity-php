<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Generator;

final class Generator
{
    private array $indexGenerators = [
        CityIndexGenerator::class,
        ZipcodeIndexGenerator::class,
    ];

    public function generateIndexes(): void
    {
        $data = require __DIR__.'/../../data/hungarian_locations.php';

        foreach ($this->indexGenerators as $indexGenerator) {
            $indexGenerator::generate($data);
        }
    }
}
