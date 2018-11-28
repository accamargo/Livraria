<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use \App\Models\Bookdescriptions;
use \App\Models\Bookauthorsbooks;
use \App\Models\Bookauthors;
class ProductPageController extends Controller
{
    public function returnProductdata($isbn){

        $book = DB::table('Bookdescriptions')->where('ISBN','=',$isbn)->first();
        $bookauthorbooks = DB::table('Bookauthorsbooks')->where('ISBN','=',$isbn)->first();
        $bookauthor = DB::table('Bookauthors')->where('AuthorID','=',$bookauthorbooks->AuthorID)->first();

        return view('productPage',[
            'book' => $book,
             'bookauthor'=>$bookauthor

        ]);

    }
}
