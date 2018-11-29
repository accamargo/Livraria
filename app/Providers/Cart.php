
<?php
namespace App;



class Cart{

    public $produtos = null;
    public $qtdTotal = 0;
    public $precoTotal =0;

    public function __construct($oldCart)
    {
        if($oldCart){

            $this->produtos = $oldCart->items;
            $this->qtdTotal = $oldCart->qtdTotal;
            $this->precoTotal = $oldCart->precoTotal;

        }

    }

public function add($produtos, $isbn){

$produtoArmazenado = ['qtd' => 0, 'preco' => $produto->preco,'produto'=>$produto];

    if($this->produtos){
        if(array_key_exists($isbn,$this->produtos)){

            $produtoArmazenado = $this->produtos[$isbn];

        }
    }

   // $produtoArmazenado['qtd']++;
   // $produtoArmazenado['preco'] = $produto->preco
   // $this-> produtos[$isbn] = $produtoArmazenado;
}

}