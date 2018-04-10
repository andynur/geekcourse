<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $dates = ['created_at'];

    public static function popular()
    {
        return Course::where('rating', '>=', 8)
                ->orderBy('rating', 'desc')
                ->take(4)
                ->with('creator')
                ->get();
    }

    public static function recomended()
    {
        return Course::orderBy('student_enroll', 'desc')                
                ->take(4)
                ->with('creator')
                ->get();
    }    

    public static function trending($category_id)
    {
        return Course::where('category_id', $category_id)            
                ->orderBy('student_enroll', 'desc')
                ->take(4)
                ->with('creator')
                ->get();
    }    

    /**
     * Get the creator that owns the course.
     */
    public function creator()
    {
        return $this->belongsTo('App\User', 'creator_id');
    }

}
