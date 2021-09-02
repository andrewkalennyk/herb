<?php

namespace App\Listeners;

use App\Mail\RegisterMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class SendRegisterEmail
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
     * @param Registered $event
     */

    public function handle(Registered $event)
    {
        Mail::to($event->user->email)->send(new RegisterMail($event->user));
    }
}
