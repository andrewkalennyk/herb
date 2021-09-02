<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email;

    /**
     * ResetPasswordEvent constructor.
     * @param string $email
     */

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}
