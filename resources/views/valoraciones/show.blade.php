@extends('layouts.plantilla')

@section('title', 'Valoración ' . $user->username)

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
    <section class="row justify-content-center mt-3 mx-1">
        <div class="col-lg-8 p-3 d-flex justify-content-between" id="edit_app">
            <a href="{{ route('aplicaciones.show', $valoracion->val_app_id) }}">Volver</a>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="row justify-content-center mt-1 mb-2">
                <div class="col-lg-8">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">  
                                <a class="ps-2" href="{{route('users.show', $user->id)}}">
                                    <img src="{{'/storage/perfiles/' . $user->foto}}" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                                    <b class="ms-2">{{$user->username}}</b>
                                </a>

                                <p class="d-inline">{{ $valoracion->val_updated_at->format('d-m-Y h:m:s') }}</p>
                            </div>

                            <input type="hidden" name="puntos" id="puntos" value="{{ $valoracion->val_puntuacion }}">
                            <div id="puntuacion" class="w-75 d-flex flex-row align-items-center justify-content-around mx-auto">
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                            </div>
                            <hr>
                            <p class="text-start mx-auto w-75">{{ $valoracion->val_texto }}</p>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="row justify-content-center my-2">
                <div class="col-lg-8">
                    <div class="list-group">
                        @foreach ($comentarios as $comentario)
                            <div class="list-group-item py-3 mb-0">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="{{route('users.show', $comentario->com_usu_id)}}">
                                        <img src="{{'/storage/perfiles/' . $comentario->foto}}" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                                        <b class="ms-2">{{$comentario->username}}</b>
                                    </a>
                                    <div class="pb-2">
                                        {{$comentario->com_updated_at->format('d-m-Y h:m:s')}}
                                    </div>
                                </div>
                                <p class="mb-1 overflow-hidden">{{$comentario->com_texto}}</p>
                                {{-- <div class="d-flex justify-content-between align-items-center mt-2">
                                    <a href="{{route('valoraciones.show', $comentario->com_id)}}" class="">Editar comentario</a>
                                    <a href="{{route('valoraciones.show', $comentario->com_id)}}" class="">Eliminar comentario</a>
                                </div> --}}
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex mt-3 justify-content-end align-items-center">
                        <div class="d-inline-block">
                            {{$comentarios->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @auth
        <section class="row">
            <div class="col-12">
                <div class="row justify-content-center my-1">
                    <div class="col-lg-8">
                        <div class="card text-center">
                            <div class="card-body">
                                <form action="{{route('comentarios.store')}}" method="POST">

                                    @csrf
                            
                                    <input type="hidden" name="com_usu_id" value="{{ Auth::user()->id }}">
                                    @error('com_usu_id') <small>*{{$message}}</small> @enderror
                            
                                    <input type="hidden" name="com_val_id" value="{{ $valoracion->val_id }}">
                                    @error('com_val_id') <small>*{{$message}}</small> @enderror
                                
                                    <br>
                                    <br>
                                    <textarea name="com_texto" rows="5" class="w-100 rounded" placeholder="Escribir comentario...">{{old('com_texto')}}</textarea>
                                
                                    @error('com_texto')
                                        <br>
                                        <small>*{{$message}}</small>
                                    @enderror
                                
                                    <br>
                                    <br>
                                    <button class="btn btn-primary" type="submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth
@endsection

@section('scripts')
    @vite(['resources/js/estrellas2.js'])
@endsection