<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\SendEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendAllEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to all users';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new SendEmail($user));
        }
    
        $this->info('Emails sent successfully.');
    }
}
