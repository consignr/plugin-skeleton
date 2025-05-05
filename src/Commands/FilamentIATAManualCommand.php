<?php

namespace Consignr\FilamentIATAManual\Commands;

use Illuminate\Console\Command;

class FilamentIATAManualCommand extends Command
{
    public $signature = 'filamentiatamanual';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
