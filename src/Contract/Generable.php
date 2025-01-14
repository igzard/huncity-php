<?php

declare(strict_types=1);

namespace Igzard\HuncityPhp\Contract;

interface Generable
{
    public static function generate(array $data): void;
}
