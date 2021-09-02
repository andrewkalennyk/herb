<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RepeatOrderEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $orderId;

    /**
     * RepeatOrderEvent constructor.
     * @param string $orderId
     */

    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
    }
}
