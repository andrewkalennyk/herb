<?php

namespace App\Listeners;

use App\Events\GeneratePromoEvent;
use App\Models\Promocode;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class GeneratePromoCode
{

    /**
     * @var User|null
     */

    public $user;

    /**
     * Create the event listener.
     *
     * @return void
     */


    public function __construct(){
        $this->user = Sentinel::getUser();
    }

    /**
     * Handle the event.
     *
     * @param  GeneratePromoEvent  $event
     * @return void
     */
    public function handle(GeneratePromoEvent $event)
    {

        do {
            $code = strtoupper(rand_passwd());
        } while(Promocode::checkUnique($code));

        Promocode::create([
            'user_id' => $this->user->id,
            'discount' => setting('skidka-po-promokodu'),
            'code' => $code
        ]);
    }
}
