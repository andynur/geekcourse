<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    
    /**
     * Get the course record associated with the category.
     */
    public function course()
    {
        return $this->hasOne('App\Cateogry');
    }     
}
