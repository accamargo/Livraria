<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use \App\Models\Users;
use Illuminate\Http\Request;
use Mail;
class CheckoutController extends Controller
{
    function checklogin(){

        if(Auth::check()){

          $usuarioautenticado = auth()->user();
          $usuarioinfo = Users::where('id','=',$usuarioautenticado->id)->first();
          
          return view('checkout02',[
            //retorna pra view do shopping cart lista de produtos 
             'usuarioinfo' => $usuarioinfo

        ]);
        }else{

          return  redirect('/login');
        }

    }


    public function sandmail(){

        Mail::send(['text'=>'checkoutEmail'],['name','Gartok'],function($message){

            $message->to('dessaccamargo@hotmail.com','To D')->subject('KGB FILES');
            $message->from('orbisbooks222@gmail.com','Teste');
        });
    

    }


}
