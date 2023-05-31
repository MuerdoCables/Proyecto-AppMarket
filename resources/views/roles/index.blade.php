@extends('layouts.plantilla')

@section('title', 'Roles')

@section('content')
    <h1>Bienvenido a la página roles</h1>
    <a href="{{route('roles.create')}}">Crear rol</a>
    <ul>
        @foreach ($roles as $rol)
            <li><a href="{{route('roles.show', $rol)}}">{{$rol->rol_nombre}}</a></li>
        @endforeach
    </ul>

    {{$roles->links('pagination::bootstrap-4')}}
@endsection
