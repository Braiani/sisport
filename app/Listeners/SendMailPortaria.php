<?php

namespace App\Listeners;

use TCG\Voyager\Events\BreadDataAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Jobs\SendMailPortaria as SendMailJob;

class SendMailPortaria
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
     * @param  BreadDataAdded  $event
     * @return void
     */
    public function handle(BreadDataAdded $event)
    {
        if ($event->dataType->slug == "portarias") {
            $portaria = $event->data;
            if ($portaria->send) {
                dispatch(new SendMailJob($portaria));
            }
        }
    }
}
