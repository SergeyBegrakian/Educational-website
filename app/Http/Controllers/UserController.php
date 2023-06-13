<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Mentor;
use App\Models\Category;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function create(){
        return view('users.signup');
    }

    //Create new user 
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' =>['required', 'email'],
            'password' =>['required', 'confirmed', 'min:6']
        ]); 

       //Hash Password
       $formFields['password'] = bcrypt($formFields['password']);
       //Create User
        $user = User::create($formFields);

       //Log in
        auth()->login($user);
        $remember;
        Mail::to($user->email)->send(new WelcomeEmail);
        return redirect('/');
    }

    //Logout user
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You have been logged out');
    }
}
