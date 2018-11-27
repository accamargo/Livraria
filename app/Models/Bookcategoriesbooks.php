<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookcategoriesbooks extends Model
{
    //
    function bookcategories(){

        return $this->belongsTo('\App\Models\Bookcategories','CategoryID','CategoryID');

    }

    function bookdescriptions(){

        return $this->belongsTo('\App\Models\Bookdescriptions','ISBN','ISBN');
    }

}
