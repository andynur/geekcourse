<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the course record associated with the user.
     */
    public function course()
    {
        return $this->hasOne('App\Course');
    }     
            
    /**
     * The wishlist that belong to the user.
     */
    public function wishlist()
    {
        return $this->belongsToMany('App\Wishlist');
    }

    /**
     * The course_user that belong to the user.
     */
    public function course_user()
    {
        return $this->belongsToMany('App\CourseUser');
    }    

}
