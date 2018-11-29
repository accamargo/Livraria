@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrinho</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="container p-5 mt-5">
    @php
        $total = 0
    @endphp
    <br><h3>Produtos</h3><br>
 
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Item Code</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($bookorderitems as $bookorderitem)
                    <tr>
                        <th scope="row"><img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookorderitem->ISBN}}.01.THUMBZZZ.jpg"></th>
                        <td><a href="/productPage/{{$bookorderitem->ISBN}}">{{$bookorderitem->ISBN}}</a></td>
                        <td><input type="number" name ='qtd' value="{{$bookorderitem->qtd}}"></td>
                        <td><p>R${{$bookorderitem->price}}</p></td>
                    </tr>
                    @php
                        $total = $bookorderitem->price + $total;
                    @endphp    
                    @endforeach 
                    <thead>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>R${{$total}}</th>
                    </thead>  

                </tbody>
              </table>
            <p>Observação:
                O primeiro pedido tem um frete de R$10,00 enquanto os demais possuem R$5,00  
            <br>Frete:R${{$frete}} por produto           
            </p>
        <a href='/checkout02' class="btn btn-primary">Finalizar pedido</a>
    </div>
</body>

@include('footer')
</html>