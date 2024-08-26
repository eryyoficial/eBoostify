
@extends('layouts.default')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
</body>
</html>

@section('content')
Oiie Filhão
<a href="{{route('erropage')}}">Clique aqui</a> <br>
{{$user->name}} <br>
{{$user->email}}  <br>
<hr>
@endsection