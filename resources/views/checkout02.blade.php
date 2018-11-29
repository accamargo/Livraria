@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @php
        $total = 0
    @endphp
    <div class="container p-5 mt-5">

        <h3>Confirme seus dados</h3><br>

        <p>Nome:{{$usuarioinfo->name}}
        <br>E-mail:{{$usuarioinfo->email}}
        </p>

        <table class="table table-hover">
                <tbody>
                  <tr class="table-active">
                    <th scope="col"></th>
                    <th scope="col">Item Code</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                  </tr>
                    @foreach($bookorderitems as $bookorderitem)
                    <tr class="table-active">
                        <th scope="row"><img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookorderitem->ISBN}}.01.THUMBZZZ.jpg"></th>
                        <td>{{$bookorderitem->ISBN}}</td>
                        <td>{{$bookorderitem->qtd}}</td>
                        <td>{{$bookorderitem->price}}</td>
                    </tr> 
                    @php
                        $total = $bookorderitem->price + $total;
                    @endphp    
                    @endforeach 
                    <tr class="table-active">
                        <th></th>
                        <th></th>
                        <th></th>
                        <th scope="col">${{$total}}</th>
                    </tr>  

                </tbody>
            </table>
        <br>
        <a class="btn btn-primary" href='/checkout03'>Confirmar Pedido<a>
    </div>

@include('footer')
</html>