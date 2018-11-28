@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>


    <ul>
    @foreach($bookorderitems as $bookorderitem)
        
        <br>
        <li><img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookorderitem->ISBN}}.01.THUMBZZZ.jpg">
        <a href="/productPage/{{$bookorderitem->ISBN}}">{{$bookorderitem->qtd}}</a>
        <br>
        <a>{{$bookorderitem->price}}</a>
        
        </li>
        <br>
    @endforeach

    </ul>
   <a href='/checkout03'>Finalizar pedido</a>
   
   


</body>

@include('footer')
</html>