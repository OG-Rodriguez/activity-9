<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Notifications\WelcomeEmail;
use App\Notifications\LoginAlertEmail;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            function ($event) {
                $event->user->notify(new WelcomeEmail());
            },
        ],
        Login::class => [
            function ($event) {
                $event->user->notify(new LoginAlertEmail());
            },
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}


