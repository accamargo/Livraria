@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>OrbisBooks</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="row p-5 mt-5">
        @include('sidebar')
        <div class="col-md-9">
            @foreach($bookdescriptions as $bookdescription)
            <div class="row">
                <div class="col-md-1">
                    <img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookdescription->ISBN}}.01.THUMBZZZ.jpg">
                </div>
                <div class="col-md-9">
                    <a href="/productPage/{{$bookdescription->ISBN}}">{{$bookdescription->tittle}}</a>
                    <p>{!!str_limit($bookdescription->description, 200),''!!}<a href="/productPage/{{$bookdescription->ISBN}}">more</a> </p>
                </div>
            </div><br>
            @endforeach
        </div>
    </div>

</body>
@include('footer')
</html>

