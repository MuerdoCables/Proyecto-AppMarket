@extends('layouts.plantilla')

@section('title', 'Categorias')

@section('content')
    <h1>Bienvenido a la página categorías</h1>
    <a href="{{route('categorias.create')}}">Crear categoría</a>
    <ul>
        @foreach ($categorias as $categoria)
            <li><a href="{{route('categorias.show', $categoria)}}">{{$categoria->cat_nombre}}</a></li>
        @endforeach
    </ul>

    {{$categorias->links('pagination::bootstrap-4')}}
@endsection
