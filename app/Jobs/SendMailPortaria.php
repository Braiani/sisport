<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Portaria;
use Illuminate\Support\Facades\Mail;

class SendMailPortaria implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected $portaria;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($portaria)
    {
        $this->portaria = $portaria;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $portaria = $this->portaria->load('pessoas');
        $destinatarios = [];
        $assunto = 'Portaria ' . $portaria->port_num . ' - ' . $portaria->descricao;

        foreach ($portaria->pessoas as $destinatario) {
            array_push($destinatarios, $destinatario->email);
        }

        Mail::send('emails.addPortaria', ['portaria' => $portaria], function ($message) use ($destinatarios, $assunto, $portaria) {
            $message->from(config('definitions.email'), config('definitions.email'));
            $message->to($destinatarios);
            $message->cc('cogep.cg@ifms.edu.br'); // Temporary solution for sending a message copy
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
