<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use \App\Models\Bookcategoriesbooks;
use \App\Models\Bookcategories;
use \App\Models\Bookdescriptions;
use \App\Models\Bookauthorsbooks;
use \App\Models\Bookauthors;
class SearchBrowseController extends Controller
{
   public function searchByCategory(Request $request){

    $bookdescriptions = Bookdescriptions::where('tittle','like','%'.$request->search_box_browse.'%')->get();
    
    //$bookcategoriesbooks =  Bookcategories::where("CategoryName",'like',$request->search_box_browse)->first()->bookcategoriesbooks()->get();
    
            return view('searchbrowse',[
               // 'bookcategoriesbooks' => $bookcategoriesbooks
                'bookdescriptions' => $bookdescriptions
    
            ]);
   }

  

   
}
