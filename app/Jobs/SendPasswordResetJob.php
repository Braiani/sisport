<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendPasswordResetJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $token;
    private $user;

    /**
     * SendPasswordResetJob constructor.
     * @param $token
     * @param $user
     */
    public function __construct($token, User $user)
    {
        $this->token = $token;
        $this->user = $user;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = $this->user;
        $token = $this->token;

        Mail::send('emails.resetPassword', compact('token', 'user'), function ($message) use ($user) {
            $message->from(config('definitions.email'), config('definitions.email'));
            $message->to($user->email);
            $message->subject('Redefinição de senha');
        });
    }
}
