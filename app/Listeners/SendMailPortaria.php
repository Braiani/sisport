<?php

namespace App\Listeners;

use TCG\Voyager\Events\BreadDataAdded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Portaria;
use Illuminate\Support\Facades\Storage;

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
            $destinatarios = [];
            $assunto = 'Portaria ' . $portaria->port_num . ' - ' . $portaria->descricao;

            foreach ($portaria->pessoas as $destinatario) {
                array_push($destinatarios, $destinatario->email);
            }

            Mail::send('emails.addPortaria', ['portaria' => $portaria], function ($message) use ($destinatarios, $assunto, $portaria) {
                $message->from('portaria.cg@ifms.edu.br', 'Portaria CG');
                $message->to($destinatarios);
                $message->subject($assunto);
                if ($portaria->arquivo !== null) {
                    foreach (json_decode($portaria->arquivo) as $file) {
                        $message->attach(public_path() . '/storage/' . $file->download_link, [
                            'as' => $file->original_name
                        ]);
                    }
                }
            });
        }
    }
}
