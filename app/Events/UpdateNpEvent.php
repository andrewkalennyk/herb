<?php

namespace App\Events;

use App\Models\NpApi;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UpdateNpEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $npApi;

    /**
     * CreateOrderCartEvent constructor.
     * @param NpApi $npApi
     */

    public function __construct(NpApi $npApi)
    {
        $this->npApi = $npApi;
    }
}
