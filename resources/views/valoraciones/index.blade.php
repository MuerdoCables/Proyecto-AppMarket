@extends('layouts.plantilla')

@section('title', 'Valoraciones')

@section('content')
    <h1>Bienvenido a la página valoraciones</h1>
    <a href="{{route('valoraciones.create')}}">Crear valoracion</a>
    <ul>
        @foreach ($valoraciones as $valoracion)
            <li><a href="{{route('valoraciones.show', $valoracion)}}">{{$valoracion->val_puntuacion}}</a></li>
        @endforeach
    </ul>

    {{$valoraciones->links('pagination::bootstrap-4')}}
@endsection
