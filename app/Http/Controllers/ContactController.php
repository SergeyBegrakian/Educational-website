<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Events\UserEmail;


class ContactController extends Controller
{
    public function create(){
        return view('welcome');
    }
    //
    public function contactsubmit(Request $request)
    {
       event(new UserEmail( 
            $request->input('name'),
            $request->input('email'),
            $request->input('subject'),
            $request->input('msg')
    ));

        return back();
    }
}
