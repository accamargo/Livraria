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
<br><br><br><br><br><br>
<a href='/checkoutEmail'> EMAIL <a>
{{ auth()->user()->id }}
{{ auth()->user()->email }}
</body>
<br><br><br><br><br><br>
@include('footer')
</html>