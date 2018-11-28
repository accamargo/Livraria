<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Bookdescriptions;
use \App\Models\Bookcategories;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    /**
    *public function __construct()
    *{
    *    $this->middleware('auth');
    *}
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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
