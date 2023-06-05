@extends('layouts.plantilla')

@section('title', 'Aplicaciones')

@section('estilos')
    @vite(['resources/sass/Index.scss'])
@endsection

@section('content')
    <h2>Todas las categorías</h2>
    <section class="row">
        @foreach ($aplicaciones as $aplicacion)
            <div class="col-md-2 col-sm-4 col-6">
                <a href="{{route('aplicaciones.show', $aplicacion)}}">
                    <img class="icono_app" src="{{$aplicacion->app_icono}}" alt="">
                    <h3>{{$aplicacion->app_nombre}}</h3>
                </a>
            </div>
        @endforeach
    </section>

    <section class="d-flex">
        <div class="d-inline-block mx-auto">
            {{$aplicaciones->links('pagination::bootstrap-4')}}
        </div>
    </section>
@endsection
