<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class StackController extends Controller
{
    //
    public function show($slug){
        $courses = Course::where('slug', $slug)->first();
        if ($courses) {
            return view('course', compact('courses'));
        } else { 
            return redirect('/')-> with('message', 'chka kurser');
        }
    }
}
