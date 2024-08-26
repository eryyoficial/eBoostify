@extends('layouts.default')


@section('title', 'Lista dos Usuários')
@section('content')
@foreach ($users as $user)
{{$user->id}} - {{$user->name}} <br>
{{$user->email}} <br>
{{$user->created_at}} <hr>
@endforeach
@endsection