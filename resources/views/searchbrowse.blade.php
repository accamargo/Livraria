@include('header')

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
            <br>
            <li><img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$book->ISBN}}.01.THUMBZZZ.jpg">
                <a href="/productPage/{{$book->ISBN}}">{{$book->tittle}}</a>
                <br>
                <a>{{!!$book->description!!}}</a>
            </li>
            <br>
        @endforeach
        </ul>
    </div>
</body>

@include('footer')
</html>


