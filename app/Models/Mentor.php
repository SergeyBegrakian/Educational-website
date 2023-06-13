<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [ 
        'full_name', 
        'profession', 
        'email', 
        'phone_number', 
        'image_path'
    ];

    function getCourses()
    {
        return $this->hasMany(Course::class, 'mentor_id', 'id');
    }
}
