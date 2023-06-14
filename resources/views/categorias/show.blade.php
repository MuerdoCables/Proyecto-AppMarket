@extends('layouts.plantilla')

@section('title', 'Categoría ' . $categoria->cat_nombre)

@section('estilos')
    @vite(['resources/sass/index.scss'])
@endsection

@section('content')
    <h2>{{ $categoria->cat_nombre }}</h2>
    <section class="row">
        @foreach ($aplicaciones as $aplicacion)
            <div class="col-md-2 col-sm-4 col-6">
                <a href="{{ route('aplicaciones.show', $aplicacion) }}">
                    <img class="icono_app" src="{{ '/storage/app_iconos/' . $aplicacion->app_icono }}" alt="">
                    <h3>{{ $aplicacion->app_nombre }}</h3>
                </a>
            </div>
        @endforeach
    </section>

    <section class="d-flex">
        <div class="d-inline-block mx-auto">
            {{$aplicaciones->links('pagination::bootstrap-4')}}
        </div>
    </section>

    {{-- <a href="{{route('categorias.edit', $categoria)}}">Editar categoria</a>

    <form action="{{route('categorias.destroy', $categoria)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form> --}}
@endsection