<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use \App\Models\Users;
use Illuminate\Http\Request;

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


}
