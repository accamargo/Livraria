<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookdescriptions extends Model
{
    //

    function bookcategoriesbooks(){

        return $this->hasMany('\App\Models\Bookcategoriesbooks','ISBN','ISBN');
    }

    function bookauthorsbooks(){

        return $this->hasMany('\App\Models\Bookauthorsbooks','ISBN','ISBN');
    }
}
