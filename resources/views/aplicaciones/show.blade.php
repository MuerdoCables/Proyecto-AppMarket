@extends('layouts.plantilla')

@section('title', 'Aplicaciones ' . $aplicacion->app_nombre)

@section('estilos')
    @vite(['resources/sass/Descargar.scss'])
@endsection

@section('content')
    <a href="{{route('aplicaciones.edit', $aplicacion)}}">Editar aplicación</a>

    <form action="{{route('aplicaciones.destroy', $aplicacion)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>

    <section class="row justify-content-center my-3">
        <article class="col-lg-8 p-3">
            <div class="row">
                <div class="col-md-2 col-3">
                    <img src="{{$aplicacion->app_icono}}" id="icono_app" class="card-img icono_app" alt="" />
                </div>
                <div class="col-md-7 col-5 d-flex flex-column justify-content-around" id="info_app">
                    <h2 class="d-inline m-0 fs-2">{{$aplicacion->app_nombre}}</h2>
                    <span class="">{{$usuario->usu_username}}</span>
                    <small class="text-muted">{{$aplicacion->app_version}}</small>
                </div>
                <div class="col-md-3 col-4 d-flex flex-column align-items-center justify-content-around">
                    <button class="btn btn-primary w-75"><a href="{{$aplicacion->app_ruta}}">Instalar</a></button>
                    <button class="btn btn-primary w-75"><a href="{{$aplicacion->app_ruta}}">Sitio web</a></button>
                </div>
            </div>
            <hr>
            <div class="row">
                <p><strong>Categoría: {{$aplicacion->app_categoria}}</strong></p>
                <p>{{$aplicacion->app_descripcion}}</p>
            </div>
        </article>
    </section>
    
    <!-- lista de comentarios -->
    <section class="row">
        <div class="col-12">

            <div class="text-center">
                <h2>Calificaciones y opiniones</h2>
            </div>                
    
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="list-group">
                        @foreach ($valoraciones as $valoracion)
                            <div class="list-group-item py-3 mb-0">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="{{route('usuarios.show', $valoracion->val_usu_id)}}">
                                        <img src="{{$valoracion->usu_foto}}" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                                        <b class="ms-2">{{$valoracion->usu_username}}</b>
                                    </a>
                                    <div class="pb-2 estrellas">
                                        {{$valoracion->val_puntuacion}}
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <p class="mb-1">{{$valoracion->val_texto}}</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <a href="{{route('valoraciones.show', $valoracion->val_id)}}" class="">Ver comentarios</a>
                                    <small>{{$valoracion->val_created_at}}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex mt-3 justify-content-end align-items-center">
                        <div class="d-inline-block">
                            {{$valoraciones->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
