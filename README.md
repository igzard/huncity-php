# Huncity-php

EN: 🌐 Searchable hungarian city list - PHP library

HU: 🌐 Kereshető magyar városlista - PHP könyvtár

<p align="left">
    <p align="left">
        <a href="https://github.com/igzard/huncity-php/actions/workflows/tests.yml"><img src="https://img.shields.io/github/actions/workflow/status/igzard/huncity-php/tests.yml?label=tests&style=flat-square" alt="Tests passed"></a>
        <a href="https://packagist.org/packages/igzard/huncity-php"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/igzard/huncity-php"></a>
        <a href="https://packagist.org/packages/igzard/huncity-php"><img alt="Latest Version" src="https://img.shields.io/packagist/v/igzard/huncity-php"></a>
    </p>
</p>

------

## English 🇬🇧

> **Requires [PHP 8.3+](https://php.net/releases/)**

## Getting started

```bash
composer require igzard/huncity-php
```

## Usage

### Search by city name
```php
use Igzard\HuncityPhp\CitySearcher;

require __DIR__.'/../vendor/autoload.php';

$searcher = new CitySearcher();
$cities = $searcher->find('Bu');
```

### Search by zipcode

```php
    
use Igzard\HuncityPhp\CitySearcher;

require __DIR__.'/../vendor/autoload.php';

$searcher = (new CitySearcher())->findBy(new Igzard\HuncityPhp\Service\Search\Zipcode());
$zipcodes = $searcher->find('2194');
```

# Magyar 🇭🇺

> **Szükséges [PHP 8.3+](https://php.net/releases/)**

## Telepítés

```bash
composer require igzard/huncity-php
```

## Használat

### Városnév alapján keresés

```php
use Igzard\HuncityPhp\CitySearcher;

require __DIR__.'/../vendor/autoload.php';

$searcher = new CitySearcher();
$cities = $searcher->find('Bu');
```

### Irányítószám alapján keresés

```php
    
use Igzard\HuncityPhp\CitySearcher;

require __DIR__.'/../vendor/autoload.php';

$searcher = (new CitySearcher())->findBy(new Igzard\HuncityPhp\Service\Search\Zipcode());
$zipcodes = $searcher->find('2194');
```

-------------

## Contributing

If you want to contribute to this project and make it better, your help is very welcome.

🚀 Install dependencies with **composer**:
```bash
make composer-install
```

✅ Run **Code quality** check:
```bash
make code-quality
```

👷 Run **PHPUnit** tests:
```bash
make phpunit
```

🎨 Run **php-cs-fixer**:
```bash
make cs-fix
```

🔥 Run **phpstan**:
```bash
make phpstan
```

**Huncity PHP** was created by **[Gergely Ignácz](https://x.com/igz4rd)** under the **[MIT license](https://opensource.org/licenses/MIT)**.