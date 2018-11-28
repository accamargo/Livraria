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
        <br>
        <a href ="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$book->ISBN}}.01.LZZZZZZZ.jpg">
        <img src="https://baldochi.unifei.edu.br/COM222/trabfinal/imagens/{{$book->ISBN}}.01.MZZZZZZZ.jpg">
        </a>
        <p>{{$book->tittle}}</p> Done by this dude <p>{{$bookauthor->nameF}} {{$bookauthor->nameL}}</p>
        
       Price:<p>{{$book->price}}</p>
       ISBN: <p>{{$book->ISBN}}</p>
       Publisher: <p>{{$book->publisher}}</p>
       Pages:<p>{{$book->pages}}</p>
       Edition:<p>{{$book->edtion}}</p>
       Description: <p> {{$book->description}}</p>     
        <br>
     <form action="/shoppingcart" method='post'>
     <input type="hidden" value ='{{$book->ISBN}}' name = 'valorisbn' >  
     <input type="number" name ='qtd'>
     <button type='submit'  name = 'addItem' >Add to Cart</button>
     {{csrf_field()}}
     </form>

    
</body>
@include('footer')
</html>

