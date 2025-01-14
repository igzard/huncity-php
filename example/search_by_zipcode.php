<?php

declare(strict_types=1);

use Igzard\HuncityPhp\CitySearcher;

require __DIR__.'/../vendor/autoload.php';

$searcher = (new CitySearcher())->findBy(new Igzard\HuncityPhp\Service\Search\Zipcode());
$zipcodes = $searcher->find('2194');

var_dump($zipcodes);
