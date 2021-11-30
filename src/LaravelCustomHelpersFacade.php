<?php

namespace Mawuekom\LaravelCustomHelpers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelCustomHelpers\Skeleton\SkeletonClass
 */
class LaravelCustomHelpersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-custom-helpers';
    }
}
