<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookauthorsbooks extends Model
{
    //
    function bookdescriptions(){

        return $this->belongsTo('\App\Models\Bookdescriptions','ISBN','ISBN');
    }
    
    function bookauthors(){

        return $this->belongsTo('\App\Models\Bookauthors','AuthorID','AuthorID');
    }
}
