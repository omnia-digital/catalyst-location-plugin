<?php

namespace OmniaDigital\CatalystLocation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OmniaDigital\CatalystLocation\CatalystLocation
 */
class CatalystLocation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OmniaDigital\CatalystLocation\CatalystLocation::class;
    }
}
