<?php

namespace App\Listeners;

use App\Events\CreateOrderCartEvent;
use App\Mail\OrderAdmin;
use App\Mail\OrderUser;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

class SendOrderUserEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CreateOrderCartEvent  $event
     * @return void
     */
    public function handle(CreateOrderCartEvent $event)
    {
        if ($email = data_get($event->order,'email')) {
            Mail::to($email)
            ->send(new OrderUser($event->order));
        }
    }
}
