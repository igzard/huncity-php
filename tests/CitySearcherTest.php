<?php

declare(strict_types=1);

use Igzard\HuncityPhp\CitySearcher;
use Igzard\HuncityPhp\Service\Search\Zipcode;
use PHPUnit\Framework\TestCase;

class CitySearcherTest extends TestCase
{
    private CitySearcher $citySearcher;

    protected function setUp(): void
    {
        $this->citySearcher = new CitySearcher();
    }

    /**
     * @dataProvider cityDataProvider
     */
    public function testCitySearch(string $needle, int $limit, array $expected): void
    {
        $citySearcher = $this->citySearcher->findBy((new Igzard\HuncityPhp\Service\Search\City())->setLimit($limit));

        $this->assertEquals($expected, $citySearcher->find($needle));
    }

    public function cityDataProvider(): array
    {
        return [
            'case 1#' => [
                'needle' => 'Tura',
                'limit' => 10,
                'expected' => [
                    [
                        'city' => 'Tura',
                        'zipcode' => '2194',
                    ],
                ],
            ],
            'case 2#' => [
                'needle' => 'Kör',
                'limit' => 2,
                'expected' => [
                    [
                        'city' => 'Környe',
                        'zipcode' => '2851',
                    ],
                    [
                        'city' => 'Köröm',
                        'zipcode' => '3577',
                    ],
                ],
            ],
        ];
    }

    /**
     * @dataProvider zipcodeDataProvider
     */
    public function testZipcodeSearch(string $needle, array $expected): void
    {
        $this->citySearcher->findBy(new Zipcode());

        $this->assertEquals($expected, $this->citySearcher->find($needle));
    }

    public function zipcodeDataProvider(): array
    {
        return [
            'case 1#' => [
                'needle' => '2194',
                'expected' => [
                    [
                        'city' => 'Tura',
                        'zipcode' => '2194',
                    ],
                ],
            ],
            'case 2#' => [
                'needle' => '2851',
                'expected' => [
                    [
                        'city' => 'Környe',
                        'zipcode' => '2851',
                    ],
                ],
            ],
            'case 3#' => [
                'needle' => '3577',
                'expected' => [
                    [
                        'city' => 'Köröm',
                        'zipcode' => '3577',
                    ],
                ],
            ],
        ];
    }
}
