<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Order;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;



    public function __construct()
    {
     
    }

    public function build()
    {
        return $this->view('success_registration')
                    ->subject('Welcome to My Web site');
    }
}
