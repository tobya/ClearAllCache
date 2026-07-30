<?php

namespace Tobya\ClearAllCache\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ClearAllCacheCommand extends Command
{
    public $signature = 'cache:clearall';

    public $description = 'Clears default cache and other caches added to cache config.  ';

    public function handle(): int
    {

        // clear default cache;
        $this->info('Clearing default cache.');
        Artisan::call('cache:clear',[], $this->output);

        $cachelist = config('cache.stores_in_use');

        foreach ($cachelist as $cacheStore) {
            $this->info('Clearing cache: ' . $cacheStore);
            Artisan::call('cache:clear',[$cacheStore],$this->output);
        }

        $this->comment('All done');
        return self::SUCCESS;
    }
}
