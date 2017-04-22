<?php



declare(strict_types=1);

namespace BrianFaust\TaxCalculator\Facades;

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
