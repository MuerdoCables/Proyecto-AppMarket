@extends('layouts.plantilla')

@section('title', 'Comentarios')

@section('content')
    <h1>Bienvenido a la página comentarios</h1>
    <a href="{{route('comentarios.create')}}">Crear comentario</a>
    <ul>
        @foreach ($comentarios as $comentario)
            <li><a href="{{route('comentarios.show', $comentario)}}">{{$comentario->com_texto}}</a></li>
        @endforeach
    </ul>

    {{$comentarios->links('pagination::bootstrap-4')}}
@endsection
