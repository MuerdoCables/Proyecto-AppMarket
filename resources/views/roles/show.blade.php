@extends('layouts.plantilla')

@section('title', 'Roles ' . $rol->rol_nombre)

@section('content')
    <h1>Bienvenido al rol {{$rol->rol_nombre}}</h1>
    <a href="{{route('roles.index')}}">Volver a roles</a>
    <br>
    <a href="{{route('roles.edit', $rol)}}">Editar rol</a>
    <p><strong>Categoría: {{$rol->rol_nombre}}</strong></p>
    <p>{{$rol->rol_descripcion}}</p>

    <form action="{{route('roles.destroy', $rol)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
