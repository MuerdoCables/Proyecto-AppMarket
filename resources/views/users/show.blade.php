@extends('layouts.plantilla')

@section('title', 'Usuarios ' . $user->username)

@section('content')
    <h1>Bienvenido al usuario {{$user->username}}</h1>
    <a href="{{route('users.index')}}">Volver a usuarios</a>
    <br>
    <a href="{{route('users.edit', $user)}}">Editar usuario</a>
    <p><strong>Categoría: {{$user->email}}</strong></p>
    <p>{{$user->nombre}}</p>
    <img src="{{$user->foto}}" />

    <form action="{{route('users.destroy', $user)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
