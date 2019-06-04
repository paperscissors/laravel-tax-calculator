# Laravel Tax Calculator

[![Build Status](https://img.shields.io/travis/artisanry/Tax-Calculator/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Tax-Calculator)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/tax-calculator.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Tax-Calculator.svg?style=flat-square)](https://github.com/artisanry/Tax-Calculator/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Tax-Calculator.svg?style=flat-square)](https://packagist.org/packages/artisanry/Tax-Calculator)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require artisanry/tax-calculator
```

## Configuration

Laravel Cookie Consent supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="Artisanry\TaxCalculator\ServiceProvider"
```

This will create a `config/tax-calculator.php` file in your app that you can modify to set your configuration. Also, make sure you check for changes to the original config file in this package between releases.

## Usage

``` php
TaxCalculator::setAmount(100)
             ->setTaxRate(20)
             ->setCurrency('EUR')
             ->setLocale('DE')
             ->setDiscount(20);

TaxCalculator::subtotal();
TaxCalculator::discount();
TaxCalculator::taxRate();
TaxCalculator::taxValue();
TaxCalculator::total();
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
