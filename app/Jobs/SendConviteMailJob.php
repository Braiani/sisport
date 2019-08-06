<?php

namespace App\Jobs;

use App\Convite;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendConviteMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $convite;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Convite $convite)
    {
        $this->convite = $convite;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $convite = $this->convite;
        $assunto = "CONVITE: Compor e colaborar com {$convite->titulo}";

        try{
            Mail::send('emails.send-convite-portaria', compact('convite'), function ($message) use ($convite, $assunto) {
                $message->from(config('definitions.email'), config('definitions.email'));
                $message->to(setting('configuracoes.email_convite'));
                if ($convite->send_copy != '') {
                    $message->cc(explode(',', $convite->send_copy));
                }
                $message->subject($assunto);
            });
            $convite->update(['sent' => true]);
        }catch (\Exception $exception) {
            Log::error($exception->getMessage());
        }
    }
}
