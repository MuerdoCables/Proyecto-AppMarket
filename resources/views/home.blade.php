@extends('layouts.plantilla')

@section('title', 'Home')

@section('estilos')
    @vite(['resources/sass/Index.scss'])
@endsection

@section('content')

    @foreach ($categorias as $categoria)
        <section class="row">
            <div class="col-12">
                <h2 class="page-header">{{$categoria->cat_nombre}}</h2>
            </div>

            @foreach ($apps[$categoria->cat_nombre] as $app)
                <div class="col-md-2 col-sm-4 col-6">
                    <a href="{{route('apps.show', $app)}}">
                        <img src="{{$app->app_icono}}" alt="">
                        <h3>{{$app->app_nombre}}</h3>
                    </a>
                </div>
            @endforeach

            <section class="d-flex">
                <div class="d-inline-block mx-auto">
                    {{$apps[$categoria->cat_nombre]->links('pagination::bootstrap-4')}}
                </div>
            </section>

        </section>
    @endforeach

@endsection
