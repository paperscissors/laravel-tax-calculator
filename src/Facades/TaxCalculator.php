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

namespace Artisanry\TaxCalculator\Facades;

use Illuminate\Support\Facades\Facade;

class TaxCalculator extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'tax-calculator';
    }
}
