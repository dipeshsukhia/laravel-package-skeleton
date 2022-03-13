<?php

namespace VendorName\LaravelPackageSkeleton;

use Illuminate\Support\Facades\Facade;
use JetBrains\PhpStorm\Pure;

class LaravelPackageSkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-package-skeleton';
    }

    protected static function say(String $say = 'hello'): string
    {
        return (new LaravelPackageSkeleton())->say($say);
    }
}
