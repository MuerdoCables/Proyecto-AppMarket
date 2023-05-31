@extends('layouts.plantilla')

@section('title', 'Usuarios ' . $usuario->usu_username)

@section('content')
    <h1>Bienvenido al usuario {{$usuario->usu_username}}</h1>
    <a href="{{route('usuarios.index')}}">Volver a usuarios</a>
    <br>
    <a href="{{route('usuarios.edit', $usuario)}}">Editar usuario</a>
    <p><strong>Categoría: {{$usuario->usu_email}}</strong></p>
    <p>{{$usuario->usu_nombre}}</p>
    <img src="{{$usuario->usu_foto}}" />

    <form action="{{route('usuarios.destroy', $usuario)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
