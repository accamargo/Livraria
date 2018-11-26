@include('header')
@include('footer')
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
    @foreach($bookdescriptions as $bookdescription)
        
        
        <li><img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$bookdescription->ISBN}}.01.THUMBZZZ.jpg">
        
        {{$bookdescription->tittle}}
        
        </li>
        
    @endforeach

    </ul>
</body>

</html>

