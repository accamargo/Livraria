<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookauthors extends Model
{
    function bookauthorsbooks(){

        return $this->hasMany('\App\Models\Bookauthorsbooks','AuthorID','AuthorID');
    }
}
