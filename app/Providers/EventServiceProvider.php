<?php

namespace App\Providers;

use App\Events\CreateOrderCartEvent;
use App\Events\GeneratePromoEvent;
use App\Events\RepeatOrderEvent;
use App\Events\ResetPasswordCreatedEvent;
use App\Events\ResetPasswordEvent;
use App\Listeners\CreateActivation;
use App\Listeners\CreateOrderCart;
use App\Listeners\GeneratePromoCode;
use App\Listeners\RepeatOrder;
use App\Listeners\ResetPassword;
use App\Listeners\ResetPasswordSendMail;
use App\Listeners\SendOrderAdminEmail;
use App\Listeners\SendRegisterEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            CreateActivation::class,
            SendRegisterEmail::class,
        ],

        ResetPasswordEvent::class => [
            ResetPassword::class
        ],

        ResetPasswordCreatedEvent::class => [
            ResetPasswordSendMail::class
        ],

        CreateOrderCartEvent::class => [
            CreateOrderCart::class,
            SendOrderAdminEmail::class,
        ],

        RepeatOrderEvent::class => [
            RepeatOrder::class
        ],

        GeneratePromoEvent::class => [
            GeneratePromoCode::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
