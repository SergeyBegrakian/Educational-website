<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'name',
        'slugg'
    ];

    function getCourses()
    {
        return $this ->hasMany(Course::class, 'category_id', 'id');
    }


}
