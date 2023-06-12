@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
    <h1>Bienvenido a la página usuarios</h1>
    <a href="{{route('users.create')}}">Crear usuario</a>
    <ul>
        @foreach ($users as $user)
            <li><a href="{{route('users.show', $user)}}">{{$user->username}}</a></li>
        @endforeach
    </ul>

    {{$users->links('pagination::bootstrap-4')}}
@endsection
