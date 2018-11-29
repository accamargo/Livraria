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

        <h3>Produtos</h3><br>
        
        @if ($message = "Carrinho vazio")
            <p>{{$message}}</p><br>
        @else
 
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Item Code</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($bookorderitems as $bookorderitem)
                    <tr>
                        <th scope="row"><img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookorderitem->ISBN}}.01.THUMBZZZ.jpg"></th>
                        <td><a href="/productPage/{{$bookorderitem->ISBN}}">{{$bookorderitem->ISBN}}</a></td>
                        <td><input type="number" name ='qtd' value="{{$bookorderitem->qtd}}"></td>
                        <td>{{$bookorderitem->price}}</td>
                        <td><button type="submit" name="removeItem" method="POST" action="/remove">Remover</button></td>
                    </tr>    
                    @endforeach 
                </tbody>
              </table>

    </ul>
        <a href='/checkout02'>Finalizar pedido</a>
        @endif
   


</body>

@include('footer')
</html>