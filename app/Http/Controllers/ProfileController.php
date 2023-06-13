<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function create(){
        return view('profile');
    }
    
    public function updatePassword(Request $request)
    {
            #Validation
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);

          #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }
    
        #Update the new Password
        if (User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)])) {
                return back()->with("message", "Password changed successfully!");
            } else {
                return back()->with("error", "Old Password Doesn't match!");
            }
    }
}
