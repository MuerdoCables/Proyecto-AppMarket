@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
    <h1>Bienvenido a la página usuarios</h1>
    <a href="{{route('usuarios.create')}}">Crear usuario</a>
    <ul>
        @foreach ($usuarios as $usuario)
            <li><a href="{{route('usuarios.show', $usuario)}}">{{$usuario->usu_username}}</a></li>
        @endforeach
    </ul>

    {{$usuarios->links('pagination::bootstrap-4')}}
@endsection
