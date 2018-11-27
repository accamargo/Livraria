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


    //$bookcategories = DB::table('Bookcategories')->where("CategoryName",'=',$request->search_box_browse)->first();
    $bookcategoriesbooks =  Bookcategories::where("CategoryName",'=',$request->search_box_browse)->first()->bookcategoriesbooks()->get();
    



            //$bookcategories = DB::table('Bookcategories')->where("CategoryName",'=',$request->search_box_browse)->first();
            //$bookcategoriesbooks = Bookcategoriesbooks::all();
            //$bookdescriptions = Bookdescriptions::all();
            //$merged = $bookcategoriesbooks->merge($bookdescriptions)->where('CategoryID','=',$bookcategories->CategoryID)->get();


            //$bookcategoriesbooks =DB::table('Bookcategoriesbooks')->where('CategoryID','=',$bookcategories->CategoryID)->get();
          //  $bookdescriptions = DB::table('Bookdescriptions')->where('ISBN','=',$bookcategoriesbooks->ISBN)->get();
            return view('searchbrowse',[
                'bookcategoriesbooks' => $bookcategoriesbooks//,
                //'bookdescriptions' => $bookdescriptions,
                //'supermerge'=>$merged
    
            ]);
   }

  

   
}
