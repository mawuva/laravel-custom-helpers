<?php

namespace Mawuekom\CustomHelpers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\CustomHelpers\Skeleton\SkeletonClass
 */
class CustomHelpersFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'custom-helpers';
    }
}
