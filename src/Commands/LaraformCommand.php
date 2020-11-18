<?php

namespace Kraziegent\Laraform\Commands;

use Illuminate\Console\Command;

class LaraformCommand extends Command
{
    public $signature = 'laraform';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
