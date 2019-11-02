<?php

namespace App\Providers;

use App\Listeners\SendPasswordChangedListener;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'TCG\Voyager\Events\BreadDataAdded' => [
            'App\Listeners\SendMailPortaria',
        ],
        'TCG\Voyager\Events\BreadDataChanged' => [
            'App\Listeners\AlterPassUser',
        ],
        PasswordReset::class => [
            SendPasswordChangedListener::class
        ],
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
