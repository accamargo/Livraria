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
        <div  class="col-md-3">
            <div class="p-2" style="background-color:#ddd;">
                    <h5>Categorias:</h5>
                    <div class="container">
                        @foreach ($bookcategories as $bookcategory)
                        <li class="list-inline">
                            <a href="#">{{$bookcategory->CategoryName}}</a>
                        </li>
                        @endforeach
                    </div>
            </div>
        </div>
        <div class="col-md-9">
            @foreach($bookdescriptions as $bookdescription)
            <li class="list-inline pb-2">
                <img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookdescription->ISBN}}.01.THUMBZZZ.jpg">
                {{$bookdescription->tittle}}
            </li> 
            @endforeach
        </div>
    </div>

</body>
@include('footer')
</html>

