<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $password;
    public $email;

    /**
     * @param string $password
     * @param string $email
     */

    public function __construct(string $password, string $email)
    {
        $this->password = $password;
        $this->email = $email;
    }
}
