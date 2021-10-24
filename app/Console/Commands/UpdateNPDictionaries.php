<?php

namespace App\Console\Commands;

use App\Events\UpdateNpEvent;
use App\Models\NpApi;
use Illuminate\Console\Command;

class UpdateNPDictionaries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'np:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update NP dictionaries';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        event(new UpdateNpEvent(new NpApi(config('np_token.token'))));
    }
}
