<?php

namespace OmniaDigital\CatalystLocation\Commands;

use Illuminate\Console\Command;

class CatalystLocationCommand extends Command
{
    public $signature = 'catalyst-location-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
