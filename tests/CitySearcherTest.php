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
    public function testCitySearch(string $needle, array $expected): void
    {
        $this->assertEquals($expected, $this->citySearcher->find($needle));
    }

    public function cityDataProvider(): array
    {
        return [
            'case 1#' => [
                'needle' => 'Tura',
                'expected' => [
                    [
                        'city' => 'Tura',
                        'zipcode' => '2194',
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
        ];
    }
}
