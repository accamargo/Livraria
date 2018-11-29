@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enviar email</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="container p-5 mt-5"><br><br>
        <h4>Enviar email para:</h4>
        {{ auth()->user()->email }}
        <br><br>
        <a class="btn btn-primary" href='/checkoutEmail'>Enviar<a>             
    </div><br><br>
</body>
@include('footer')
</html>