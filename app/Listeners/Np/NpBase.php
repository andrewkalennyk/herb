<?php

namespace App\Listeners\Np;

use App\Events\UpdateNpEvent;
use App\Models\NpArea;
use App\Models\NpCity;
use Illuminate\Support\Facades\DB;

class NpBase
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        \Log::info('---------- ');
        \Log::info(date('d-m-Y H:i:s'));
        \Log::info('---------- ');
    }

    public function __destruct()
    {
        \Log::info('---------- ');
        \Log::info(date('d-m-Y H:i:s'));
        \Log::info('---------- ');
    }

    /**
     * Handle the event.
     *
     * @param  UpdateNpEvent  $event
     * @return void
     */
    public function handle(UpdateNpEvent $event) {}
}
