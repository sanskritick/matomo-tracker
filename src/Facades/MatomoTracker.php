<?php

namespace Sanskritick\MatomoTracker\Facades;

use Illuminate\Support\Facades\Facade;

class MatomoTracker extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'matomotracker';
    }
}
