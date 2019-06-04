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

namespace Artisanry\Tests\TaxCalculator\tests\Facades;

use Artisanry\TaxCalculator\Calculator;
use Artisanry\TaxCalculator\Facades\TaxCalculator;
use Artisanry\Tests\TaxCalculator\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class TaxCalculatorTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'tax-calculator';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return TaxCalculator::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Calculator::class;
    }
}
