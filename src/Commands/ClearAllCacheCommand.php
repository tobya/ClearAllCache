<?php

namespace Tobya\ClearAllCache\Commands;

use Illuminate\Console\Command;

class ClearAllCacheCommand extends Command
{
    public $signature = 'clearallcache';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
