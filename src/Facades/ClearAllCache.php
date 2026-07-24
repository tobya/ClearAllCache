<?php

namespace Tobya\ClearAllCache\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tobya\ClearAllCache\ClearAllCache
 */
class ClearAllCache extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tobya\ClearAllCache\ClearAllCache::class;
    }
}
