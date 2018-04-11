<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    /**
     * The users that belong to the whislist.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }    

    /**
     * The courses that belong to the whislist.
     */
    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }        
}
