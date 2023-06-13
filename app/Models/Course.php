<?php

namespace App\Models;

use App\Models\Mentor;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'slug', 
        'title', 
        'description', 
        'topics', 
        'content', 
        'start', 
        'duration', 
        'level', 
        'price', 
        'image_path', 
        'mentor_id', 
        'category_id'
    ];
    
    function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    function category()
    {
        return $this->belongsTo(Category::class);
    }

    

} 


