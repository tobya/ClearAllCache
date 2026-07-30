<?php

namespace Tobya\ClearAllCache;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tobya\ClearAllCache\Commands\ClearAllCacheCommand;

class ClearAllCacheServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('clearallcache')
            ->hasCommand(ClearAllCacheCommand::class);
    }
}
