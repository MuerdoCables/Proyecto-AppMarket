@extends('layouts.plantilla')

@section('title', 'Aplicaciones ' . $aplicacion->app_nombre)

@section('estilos')
    @vite(['resources/sass/descargar.scss'])

    <!--página que permite que se vean los iconos https://cdnjs.com/libraries/font-awesome/-->
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
@endsection

@section('content')
    @auth
        @if ($aplicacion->app_usu_id == Auth::user()->id)
            <section class="row justify-content-center my-3 mx-1">
                <div class="col-lg-8 p-3 d-flex justify-content-between" id="edit_app">
                    <a href="{{ route('aplicaciones.edit', $aplicacion) }}">Editar aplicación</a>

                    <form action="{{ route('aplicaciones.destroy', $aplicacion) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a onclick="event.preventDefault(); this.closest('form').submit();" type="submit">Eliminar</a>
                    </form>
                </div>
            </section>
        @endif
    @endauth

    {{-- Datos de la app --}}
    <section class="row justify-content-center my-3 mx-1">
        <article class="col-lg-8 p-3">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="{{ $aplicacion->app_icono }}" id="icono_app" class="card-img icono_app" alt="" />
                </div>
                <div class="col-md-7 col-sm-5 col-7 d-flex flex-column justify-content-around" id="info_app">
                    <h2 class="d-inline m-0 fs-2">{{ $aplicacion->app_nombre }}</h2>
                    <a href="{{ route('users.show', $user->id) }}">{{ $user->username }}</a>
                    <small class="text-muted">Versión: {{ $aplicacion->app_version }}</small>
                </div>
                <div class="col-md-3 col-sm-4 col-12 d-flex flex-column align-items-center justify-content-around">
                    <a class="btn btn-primary w-100 my-sm-auto my-3" href="{{ $aplicacion->app_ruta }}" role="button">Instalar</a>
                    <a class="btn btn-primary w-100 my-sm-auto my-2" href="{{ $aplicacion->app_enlace }}" role="button">Sitio web</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <strong class="col-sm-6 col-12 mb-2">Categoría: {{ $aplicacion->app_categoria }}</strong>
                <small class="col-sm-6 col-12 text-muted text-sm-end mb-2">Última actualización: {{ $aplicacion->app_updated_at->format('d-m-Y') }}</small>
                <p class="col-12">{{ $aplicacion->app_descripcion }}</p>
            </div>
        </article>
    </section>

    {{-- Mi valoración --}}
    @auth
        <section class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2>Valora esta aplicación</h2>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-8">
                        <div class="card text-center">
                            <div class="card-body">
                                @if (empty($valoracion))
                                    <form action="{{route('valoraciones.store')}}" method="POST">

                                        @csrf
                                
                                        <input type="hidden" name="val_usu_id" value="{{ Auth::user()->id }}">
                                        @error('val_usu_id') <small>*{{$message}}</small> @enderror
                                
                                        <input type="hidden" name="val_app_id" value="{{ $aplicacion->app_id }}">
                                        @error('val_app_id') <small>*{{$message}}</small> @enderror
                                
                                        <input type="hidden" name="val_puntuacion" id="val_puntuacion" value="{{old('val_puntuacion')}}">
                                        <div id="puntuacion" class="w-75 d-flex flex-row align-items-center justify-content-around mx-auto">
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                        </div>
                                
                                        @error('val_puntuacion')
                                            <br>
                                            <small>*{{$message}}</small>
                                        @enderror
                                
                                        <br>
                                        <br>
                                        <textarea name="val_texto" rows="5" class="w-100 rounded" placeholder="Escribe tu experiencia (opcional)">{{old('val_texto')}}</textarea>
                                
                                        @error('val_texto')
                                            <br>
                                            <small>*{{$message}}</small>
                                        @enderror
                                
                                        <br>
                                        <br>
                                        <button class="btn btn-primary" type="submit">Crear reseña</button>
                                    </form>
                                @else
                                    <form action="{{route('valoraciones.update', $valoracion->val_id)}}" method="POST">

                                        @csrf
                                        @method('put')
                                        @error('val_usu_id') <small>*{{$message}}</small> @enderror
                                        @error('val_app_id') <small>*{{$message}}</small> @enderror
                                    
                                        <input type="hidden" name="val_puntuacion" id="val_puntuacion" value="{{old('val_puntuacion', $valoracion->val_puntuacion)}}">
                                        <div id="puntuacion" class="w-75 d-flex flex-row align-items-center justify-content-around mx-auto">
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                        </div>

                                        @error('val_puntuacion')
                                            <br>
                                            <small>*{{$message}}</small>
                                        @enderror
                                    
                                        <br>
                                        <br>
                                        <textarea name="val_texto" rows="5" class="w-100 rounded" placeholder="Escribe tu experiencia (opcional)">{{old('val_texto', $valoracion->val_texto)}}</textarea>
                                    
                                        @error('val_texto')
                                            <br>
                                            <small>*{{$message}}</small>
                                        @enderror
                                    
                                        <br>
                                        <br>
                                        <button class="btn btn-primary w-50" type="submit">Actualizar reseña</button>
                                    </form>

                                    <form action="{{route('valoraciones.destroy', $valoracion->val_id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-primary w-50 my-3" type="submit">Eliminar</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth
    
    {{-- Valoraciones y comentarios --}}
    <section class="row">
        <div class="col-12">

            <div class="text-center">
                <h2>Reseñas y comentarios</h2>
            </div>                
    
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="list-group">
                        @foreach ($valoraciones as $calificacion)
                            <div class="list-group-item py-3 mb-0">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="{{route('users.show', $calificacion->val_usu_id)}}">
                                        <img src="{{$calificacion->foto}}" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                                        <b class="ms-2">{{$calificacion->username}}</b>
                                    </a>
                                    <div class="pb-2 estrellas text-warning">
                                        {{$calificacion->val_puntuacion}}
                                    </div>
                                </div>
                                <p class="mb-1">{{$calificacion->val_texto}}</p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <a href="{{route('valoraciones.show', $calificacion->val_id)}}" class="">Ver comentarios</a>
                                    <small>{{ $calificacion->val_updated_at->format('d-m-Y h:m:s') }}</small>
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

@section('scripts')
    @vite(['resources/js/estrellas.js'])
@endsection
