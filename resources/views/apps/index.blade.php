@extends('layouts.plantilla')

@section('title', 'Apps')

@section('estilos')
    @vite(['resources/sass/Index.scss'])
@endsection

@section('content')
    <h2>Todas las categorías</h2>
    <section class="row">
        @foreach ($apps as $app)
            <div class="col-md-2 col-sm-4 col-6">
                <a href="{{route('apps.show', $app)}}">
                    <img src="{{$app->app_icono}}" alt="">
                    <h3>{{$app->app_nombre}}</h3>
                </a>
            </div>
        @endforeach
    </section>

    <section class="d-flex">
        <div class="d-inline-block mx-auto">
            {{$apps->links('pagination::bootstrap-4')}}
        </div>
    </section>
@endsection
