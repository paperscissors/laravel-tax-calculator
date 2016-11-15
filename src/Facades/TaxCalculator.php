<?php

namespace BrianFaust\TaxCalculator\Facades;

use Illuminate\Support\Facades\Facade;

class TaxCalculator extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tax-calculator';
    }
}
