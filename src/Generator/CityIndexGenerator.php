<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Generator;

use Igzard\HuncityPhp\Contract\Generable;

/**
 * @internal
 */
final class CityIndexGenerator implements Generable
{
    public static function generate(array $data): void
    {
        $cities = [];

        foreach ($data as $city) {
            $name = strtolower($city['city']);

            $index = 0;
            $length = \strlen($name);

            while ($index < $length) {
                $cities[substr($name, 0, $index + 1)][] = $city;
                ++$index;
            }
        }

        file_put_contents(__DIR__.'/../../data/generated/_cities.php', '<?php return '.var_export($cities, true).';');
    }
}
