<?php

namespace Spatie\Universal\Analytics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Universal\Analytics\Analytics
 */
class AnalyticsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-analytics';
    }
}
