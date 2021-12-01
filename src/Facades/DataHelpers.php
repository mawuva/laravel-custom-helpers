<?php

namespace Mawuekom\CustomHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\CustomHelpers\Skeleton\SkeletonClass
 */
class DataHelpers extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'custom-helpers.data-helpers';
    }
}
