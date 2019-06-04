<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Tax Calculator.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\TaxCalculator;

use Illuminate\Support\ServiceProvider;

class TaxCalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-tax-calculator.php' => config_path('laravel-tax-calculator.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-tax-calculator.php', 'laravel-tax-calculator');

        $this->app->singleton('tax-calculator', function ($app) {
            $config = $app->config['laravel-tax-calculator'];

            return new Calculator($config['currency'], $config['locale'], $config['tax_rate']);
        });
    }

    public function provides()
    {
        return ['tax-calculator'];
    }
}
