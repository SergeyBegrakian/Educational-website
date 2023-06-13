<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function create(){
        return view('users/signup');
    }
    
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You have been logged out');
    }
}
