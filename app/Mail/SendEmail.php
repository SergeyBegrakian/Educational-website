<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Build;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    { 
        //
    }


   
    public function build()
    {
        return $this->view('success_registration');
    }
}
