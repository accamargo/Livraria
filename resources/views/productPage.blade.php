@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="container p-5 mt-5">
        <div class="row">
            <div class="col-md-2">
                <a href ="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$book->ISBN}}.01.LZZZZZZZ.jpg">
                    <img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$book->ISBN}}.01.MZZZZZZZ.jpg">
                </a>
            </div>
            
            <div class="col-md-8">
                <h4>{{$book->tittle}}</h4>
                <p>Author: {{$bookauthor->nameF}} {{$bookauthor->nameL}} 
                <br>Price: {{$book->price}}
                <br>ISBN: {{$book->ISBN}}
                <br>Publisher: {{$book->publisher}}
                <br>Pages: {{$book->pages}}
                <br>Edition: {{$book->edtion}}</p>
            </div>
        </div>

        <h5>Description:</h5> <p> {!!$book->description!!}</p><br>
        <form action="/shoppingcart" method='post'>
        <input type="hidden" value ='{{$book->ISBN}}' name = 'valorisbn' >  
        <input type="number" name ='qtd'>
        <button type='submit' name = 'addItem' >Add to Cart</button>
        {{csrf_field()}}
        </form>
    </div>
    
</body>
@include('footer')
</html>

