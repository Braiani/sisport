<?php

namespace App\Listeners;

use \TCG\Voyager\Events\BreadDataChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AlterPassUser
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
     * @param  BreadDataChanged  $event
     * @return void
     */
    public function handle(BreadDataChanged $event)
    {
        if ($event->dataType->slug == "users" and $event->changeType == 'Updated') {
            $user = $event->data;

            if (!$user->alter_pass) {
                $user->alter_pass = 1;
                $user->save();
            }
        }
    }
}
