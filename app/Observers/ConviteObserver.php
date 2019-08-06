<?php

namespace App\Observers;

use App\Convite;
use App\Jobs\SendConviteMailJob;

class ConviteObserver
{
    /**
     * Handle the convite "created" event.
     *
     * @param  \App\Convite  $convite
     * @return void
     */
    public function created(Convite $convite)
    {
        dispatch(new SendConviteMailJob($convite));
    }

    /**
     * Handle the convite "updated" event.
     *
     * @param  \App\Convite  $convite
     * @return void
     */
    public function updated(Convite $convite)
    {
        //
    }

    /**
     * Handle the convite "deleted" event.
     *
     * @param  \App\Convite  $convite
     * @return void
     */
    public function deleted(Convite $convite)
    {
        //
    }
}
