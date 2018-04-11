<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{

    /**
     * Get the course that owns the video.
     */
    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }       
}
