<?php

namespace Eskiell\FocusSubscription;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eskiell\FocusSubscription\Skeleton\SkeletonClass
 */
class FocusSubscriptionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'focus-subscription';
    }
}
