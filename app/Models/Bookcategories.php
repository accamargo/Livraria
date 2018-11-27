<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Bookauthorsbooks;
class Bookcategories extends Model
{
    //
    function bookcategoriesbooks(){

        return $this->hasMany('\App\Models\Bookcategoriesbooks','CategoryID','CategoryID');
    }
}
