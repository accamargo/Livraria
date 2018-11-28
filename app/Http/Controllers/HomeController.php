<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Bookdescriptions;
use \App\Models\Bookcategories;

class HomeController extends Controller
{
    public function index(){
        
        $bookdescriptions = Bookdescriptions::all();
        $bookcategories = Bookcategories::all();

        return view('index',[
            'bookcategories' => $bookcategories,
            'bookdescriptions' => $bookdescriptions
        ]);
    }

    public function about(){
        return view('about');
    }

}
