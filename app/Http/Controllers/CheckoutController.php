<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use \App\Models\Users;
use \App\Models\Bookorders;
use \App\Models\Bookorderitems1;
use \App\Models\Bookdescriptions;
use Illuminate\Http\Request;
use \App\Models\Bookorderitems1;
use Mail;
use Session;

class CheckoutController extends Controller
{
    function checklogin(){
        $produto = Session::get('orderID');
        $bookorderitems = Bookorderitems1::where('orderID','=',$produto)->get();

        if(Auth::check()){
          $usuarioautenticado = auth()->user();
          $usuarioinfo = Users::where('id','=',$usuarioautenticado->id)->first();
          
          return view('checkout02',[
            //retorna pra view do shopping cart lista de produtos 
             'usuarioinfo' => $usuarioinfo,
             'bookorderitems' => $bookorderitems
        ]);
        }else{

          return  redirect('/login');
        }

    }


    public function sandmail(){

        Mail::send(['text'=>'checkoutEmail'],['name','Gartok'],function($message){

            $message->to(auth()->user()->email,'To Jac')->subject('KGB FILES');
            $message->from('jacobguy7600@gmail.com','Teste');
        });

        return  view('/emailEnviado');
    

    }


    public function historico(){
//$books= Bookcategoriesbooks::where('CategoryID','=',$CategoryID)->join('Bookdescriptions','Bookcategoriesbooks.ISBN','=','Bookdescriptions.ISBN')->get();
            
        $historyorders = Bookorders::where('custID','=',auth()->user()->id)
        ->join('Bookorderitems1','Bookorders.orderID','=','Bookorderitems1.orderID')
        ->join('Bookdescriptions','Bookorderitems1.ISBN','=','Bookdescriptions.ISBN')->get();    
         
        return view('/orderhistory', compact('historyorders'));
    }


}
