<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Bookdescriptions;

class HomeController extends Controller
{
    public function index(){
        
        $bookdescriptions = Bookdescriptions::all();
        

        return view('index',[
            'bookdescriptions' => $bookdescriptions

        ]);
    }

}
