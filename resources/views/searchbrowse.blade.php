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
<div class="sidenav">
  <a href="#">ASP.NET</a>
  <a href="#">JavaScript</a>
  <a href="#">MySQL</a>
  <a href="#">PHP</a>
  <a href="#">Regular Expressions</a>
  <a href="#">SQL</a>
  <a href="#">WebUsability</a>
  
</div>

    <ul>
    @foreach($bookcategoriesbooks as $bookcategoriesbook)
        
        <br>
        <li><img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookcategoriesbook->ISBN}}.01.THUMBZZZ.jpg">
        
        <a href = "/productPage/{{$bookcategoriesbook->ISBN}}">{{$bookcategoriesbook->ISBN}}</a>
        
        </li>
        <br>
    @endforeach

    </ul>
</body>

@include('footer')
</html>


