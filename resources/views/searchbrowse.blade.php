@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="container p-5 mt-5">
        <ul>
        @foreach($books as $book) 
        <div class="row">
                <div class="col-md-1">
                    <img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$book->ISBN}}.01.THUMBZZZ.jpg">
                </div>
                <div class="col-md-9">
                    <a href="/productPage/{{$book->ISBN}}">{{$book->tittle}}</a>
                    <p>{!!str_limit($book->description, 200),''!!}<a href="/productPage/{{$book->ISBN}}">more</a> </p>
                </div>
        </div><br>
        @endforeach
        </ul>
    </div>
</body>

@include('footer')
</html>


