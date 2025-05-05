<?php

namespace Consignr\FilamentIATAManual\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CConsignr\FilamentIATAManual\FilamentIATAManual
 */
class FilamentIATAManual extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Consignr\FilamentIATAManual\FilamentIATAManual::class;
    }
}
