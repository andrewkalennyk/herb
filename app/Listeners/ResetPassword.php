<?php

namespace App\Listeners;

use App\Events\ResetPasswordCreatedEvent;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Hash;

class ResetPassword
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = Sentinel::findUserByCredentials(['email' => $event->email]);
        if ($user) {
            $passwd = rand_passwd();
            $user->password = Hash::make($passwd);
            $user->save();

            event(new ResetPasswordCreatedEvent($passwd, $event->email));
        }
    }
}
