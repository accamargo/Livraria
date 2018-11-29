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
      $bookcategories = Bookcategories::all();
      $books = Bookdescriptions::where('tittle','like','%'.$request->search_box_browse.'%')->get();

            return view('searchbrowse',[
               'books' => $books,
               'bookcategories' => $bookcategories
                //'bookauthors' => $bookauthors
            ]);
   }

  
   public function category($CategoryID){
      $bookcategories = Bookcategories::all();
       // $book = Bookdescriptions::join('Bookcategoriesbooks','Bookdescriptions.ISBN','=',)

      $books= Bookcategoriesbooks::where('CategoryID','=',$CategoryID)->join('Bookdescriptions','Bookcategoriesbooks.ISBN','=','Bookdescriptions.ISBN')->get();

      //  return view('searchbrowse',[
            // 'bookcategoriesbooks' => $bookcategoriesbooks
         //   'bookdescriptions' => $books
             //'bookauthors' => $bookauthors
       //  ]);
      return view('searchbrowse', compact('books'),
      ['bookcategories' => $bookcategories]);
   }

   
}
