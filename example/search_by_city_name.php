<?php

declare(strict_types=1);

use Igzard\HuncityPhp\CitySearcher;

require __DIR__.'/../vendor/autoload.php';

$searcher = new CitySearcher();
$cities = $searcher->find('Bu');

var_dump($cities);
