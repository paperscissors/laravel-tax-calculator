# Laravel Tax Calculator

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-tax-calculator
```

## Configuration

Laravel Cookie Consent supports optional configuration.

To get started, you'll need to publish all vendor assets:

```bash
$ php artisan vendor:publish --provider="BrianFaust\TaxCalculator\ServiceProvider"
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

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
