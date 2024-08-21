@extends('layouts.default')

@section('content')
Oiie Filhão
<a href="{{route('erropage')}}">Clique aqui</a> <br>
{{$user->name}} <br>
{{$user->email}}  <br>
<hr>
@endsection