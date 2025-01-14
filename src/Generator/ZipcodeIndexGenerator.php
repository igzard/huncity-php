<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Generator;

use Igzard\HuncityPhp\Contract\Generable;

/**
 * @internal
 */
final class ZipcodeIndexGenerator implements Generable
{
    public static function generate(array $data): void
    {
        $zipcodes = [];

        foreach ($data as $city) {
            $zipcodes[$city['zipcode']][] = $city;
        }

        file_put_contents(__DIR__.'/../../data/generated/_zipcodes.php', '<?php return '.var_export($zipcodes, true).';');
    }
}
