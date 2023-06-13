<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mentor;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slugg){
        $category = Category::where('slugg', $slugg)->first();
        $courses = Course::where('category_id', $category->id)->get();
        return view('category', compact('category', 'courses'));
        
    }
}
