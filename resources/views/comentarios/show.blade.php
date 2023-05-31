@extends('layouts.plantilla')

@section('title', 'Comentarios ' . $comentario)

@section('content')
    <h1>Bienvenido al comentario {{$comentario->com_id}}</h1>
    <a href="{{route('comentarios.index')}}">Volver a comentarios</a>
    <br>
    <a href="{{route('comentarios.edit', $comentario)}}">Editar comentario</a>
    <p><strong>Categoría: {{$comentario->com_usu_id}}</strong></p>
    <p>{{$comentario->com_texto}}</p>

    <form action="{{route('comentarios.destroy', $comentario)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
