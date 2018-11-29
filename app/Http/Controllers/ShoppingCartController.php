<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Bookorderitems1;
use \App\Models\Bookdescriptions;
use \App\Models\Bookorders;
use \App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Session;

class ShoppingCartController extends Controller
{
    //
    private $frete = 5;

    public function remove(){
        return view('index');
    }

    public function addToCart(Request $request){
        $produto = new Bookorderitems1();
        //Session::put('orderID', $value);
        //recupera pedido
       $bookorder = Bookorders::all()->last();
        if($bookorder === null){

            $order = 1;
        }else{
            $order = $bookorder->orderID+1;
        }
        Session::put('orderID', $order);
        $produto = new Bookorderitems1();
         //recupera descricao do livro atraves do valor isbn submetido pelo formulario do botao addtocart em productpage.blade
        $bookdescription = Bookdescriptions::where('ISBN','=',$request->valorisbn)->first();
        //cria produto para ser armazenado no banco
        $BookorderitemsAntigo = Bookorderitems1::where('orderID','=',$order)->first();
        if($BookorderitemsAntigo == null){
            $this->frete = 10;
            $produto->price = $this->frete + ($request->qtd * $bookdescription->price);
        }else{
            $this->frete =5;
            $produto->price = $this->frete + $request->qtd * $bookdescription->price;
        }
        //coloca as informacoes do pedido a partir dos valores recuperados
        $produto->orderID = Session::get('orderID');
        $produto->qtd   = $request->qtd;
        $produto->ISBN  = $request->valorisbn;
        
        $produto->save();//salva na tabela de ordem de items

        $Bookorderitems = Bookorderitems1::where('orderID','=',$order)->get();
        
        $message = "Seus produtos";
        return $this->viewCart();
        
    }
    
   public  function CreateOrder(){
        $usuarioautenticado = auth()->user();
        $usuarioinfo = Users::where('id','=',$usuarioautenticado->id)->first();
        $pedido = new Bookorders();
        $pedido->custID = $usuarioinfo->id;
        $pedido->save();
        Session::forget('orderID');
        return view('checkout03');
        
    }

    public function viewCart(){
        $produto = Session::get('orderID');
        $bookorderitems = Bookorderitems1::where('orderID','=',$produto)->get();
        
            return view('shoppingcart',[
                //retorna pra view do shopping cart lista de produtos 
                 'bookorderitems' => $bookorderitems,
                 'frete' => $this->frete
            ]);   
        
    }

}
