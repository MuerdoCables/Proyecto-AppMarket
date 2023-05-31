@extends('layouts.plantilla')

@section('title', 'Valoraciones ' . $valoracion->val_usu_id)

@section('content')
    <h1>Bienvenido al valoracion {{$valoracion->val_puntuacion}}</h1>
    <a href="{{route('valoraciones.index')}}">Volver a valoraciones</a>
    <br>
    <a href="{{route('valoraciones.edit', $valoracion)}}">Editar valoracion</a>
    <p><strong>Valoración: {{$valoracion->val_puntuacion}}</strong></p>
    <p>{{$valoracion->val_texto}}</p>

    <form action="{{route('valoraciones.destroy', $valoracion)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
