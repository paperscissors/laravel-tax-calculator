<?php



declare(strict_types=1);

namespace BrianFaust\Tests\TaxCalculator\tests\Facades;

use BrianFaust\TaxCalculator\Calculator;
use BrianFaust\TaxCalculator\Facades\TaxCalculator;
use BrianFaust\Tests\TaxCalculator\AbstractTestCase;
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
