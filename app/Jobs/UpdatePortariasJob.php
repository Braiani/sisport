<?php

namespace App\Jobs;

use App\Portaria;
use App\Status;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class UpdatePortariasJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $portaria;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Portaria $portaria)
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
        $portaria = $this->portaria;

        $status = Status::padraoVencimento()->first();

        $portaria->update([
            'status_id' => $status->id
        ]);

        try {
            $this->sendMail($portaria);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }

    }

    private function sendMail(Portaria $portaria)
    {
        $portaria = $portaria->load('pessoas');
        $destinatarios = [];
        $assunto = "Portaria {$portaria->port_num} - {$portaria->descricao} - Vencida";

        if (is_null($portaria->pessoas)) {
            return;
        }
        foreach ($portaria->pessoas as $destinatario) {
            $email = $destinatario->email ?? null;
            if (! is_null($email)){
                array_push($destinatarios, $email);
            }
        }

        Mail::send('emails.portaria-vencida', ['portaria' => $portaria], function ($message) use ($destinatarios, $assunto, $portaria) {
            $message->from(config('definitions.email'), config('definitions.email'));
            $message->to($destinatarios);
            $message->subject($assunto);
            if (! is_null($portaria->arquivo)) {
                foreach (json_decode($portaria->arquivo) as $file) {
                    $message->attach(public_path() . '/storage/' . $file->download_link, [
                        'as' => $file->original_name
                    ]);
                }
            }
        });
    }
}
