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
     * Get the author that owns the course.
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'author_id');
    }

    /**
     * Get the category that owns the course.
     */
    public function category()
    {
        return $this->belongsTo('App\User', 'category_id');
    }     

    /**
     * Get the video record associated with the course.
     */
    public function video()
    {
        return $this->hasMany('App\Video');
    }       


    /**
     * The wishlist that belong to the course.
     */
    public function wishlist()
    {
        return $this->belongsToMany('App\Wishlist');
    }  
    
    /**
     * The course_user that belong to the course.
     */
    public function course_user()
    {
        return $this->belongsToMany('App\CourseUser');
    }      
}
