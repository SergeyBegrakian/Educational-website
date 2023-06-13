<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    //
    public function create(){
        return view('users/signin');
    }

//Authenticate user
public function authenticate(Request $request)
{
    $formFields = $request->validate([

        'email' =>['required', 'email'],
        'password' =>'required'
    ]); 

    if (auth()->attempt($formFields)) {
        $request->session()->regenerateToken();

        return redirect('/')-> with('message','You are now logged in');
    }
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
}
}
