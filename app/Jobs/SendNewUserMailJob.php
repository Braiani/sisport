<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendNewUserMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user, $password;

    /**
     * Create a new job instance.
     *
     * @param User $user
     * @param string $password
     */
    public function __construct(User $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $user = $this->user;
        $password = $this->password;
        $email = $user->email ?? false;
        if (!$email) {
            return;
        }
        $assunto = "Novo usuario criado no " . setting("admin.title");

        try
        {
            Mail::send('emails.newUser', compact('user', 'password'), function ($message) use ($assunto, $email) {
                $message->from(config('definitions.email'), config('definitions.email'));
                $message->to($email);
                $message->subject($assunto);
            });
        }catch (\Exception $exception)
        {
            Log::error("Send New User Job Error: " . $exception->getMessage());
        }
    }
}
