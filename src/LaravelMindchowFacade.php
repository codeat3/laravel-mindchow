<?php

namespace Codeat3\LaravelMindchow;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codeat3\LaravelMindchow\Skeleton\SkeletonClass
 */
class LaravelMindchowFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-mindchow';
    }
}
