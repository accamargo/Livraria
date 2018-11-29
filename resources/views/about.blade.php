@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sobre</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="row p-5 mt-5">
        @include('sidebar')
        <div class="col-md-9">
        <h3>OrbisBooks</h3><br>

        <p> Criada em 2018, feita com o proposito de mandar bem no trabalho.
            Nosso foco é promover um site legal para compras de livro acadêmicos e assim
            tirar 10 neste trabalho.
            <br><br>
            Os fundadores são Andressa Camargo, Gabriel Krupa e Jacqueline Sayuri.
            A seguir temos um texto tirado da internet sobre livros para ganhar um pouco
            de volume nessa página. Deseja-mos a vocês uma boa leitura :)
            <br><br>
            Bons livros transmitem conhecimento ou saberes. O conhecimento humano 
            deve muito aos livros que permitiu que uma geração mostrasse a geração 
            futura o que ela aprendeu, seus testes, pesquisas e resultados bem sucedidos 
            de trabalhos feitos por homens de sua época. Quando lemos bons livros 
            estamos nós interagindo e abstraindo o conhecimento de outras pessoas 
            sobre os mais diversos assuntos.
        </p>
        </div>
    </div>

</body>
@include('footer')
</html>