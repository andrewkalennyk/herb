<?php

namespace App\Listeners;

use App\Events\CreateOrderCartEvent;
use App\Mail\OrderAdmin;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;

class SendOrderAdminEmail
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
        Mail::to(explode(',',setting('email-administratora')))
            ->send(new OrderAdmin($event->order));
    }
}
