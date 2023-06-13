<?php

namespace App\Listeners;

use App\Events\UserEmail;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailListener
{

    private $request;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserEmail $event)
    { 
        DB::table('emails')->insert([
            'name' => $event->name,
            'email' => $event->email,
            'subject' => $event->subject,
            'msg' => $event->msg,
          
        ]);
    

        Mail::send('emails.contactmail', [
            'name' => $event->name,
            'email' => $event->email,
            'subject' => $event->subject,
            'msg' => $event->msg,
        ]
        , function ($mail) use($event){
            $mail->from($event->email, $event->name);
            $mail->to('sbegrakian@gmail.com')->subject('Contact Us Message');
        });
  
        return redirect()-> back()->with('Massage has been sent successfull');
    }
}
