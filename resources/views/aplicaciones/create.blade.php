@extends('layouts.plantilla')

@section('title', 'Aplicacions create')

@section('content')
    <section class="row">
        <div class="col-12">
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="card text-center">
                        <div class="card-body">
                            <form action="{{route('aplicaciones.store')}}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <input type="hidden" name="app_usu_id" value="{{ Auth::user()->id }}">
                                @error('app_usu_id') <small>*{{$message}}</small> @enderror

                                <label>
                                    Nombre de la aplicación:
                                    <br>
                                    <input type="text" name="app_nombre" value="{{old('app_nombre')}}">
                                </label>

                                @error('app_nombre')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <label>
                                    Logotipo:
                                    <br>
                                    <img id="imagen" src="{{ '/storage/app_iconos/' . old('icono', 'predeterminado.png') }}" alt="" width="50" height="50">
                                    <input type="file" name="icono" id="foto" value="{{old('icono', 'predeterminado.png')}}">
                                </label>

                                @error('app_icono')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <label>
                                    Descripción:
                                    <br>
                                    <textarea name="app_descripcion" rows="5">{{old('app_descripcion')}}</textarea>
                                </label>

                                @error('app_descripcion')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <label>
                                    Versión:
                                    <br>
                                    <input type="text" name="app_version" value="{{old('app_version')}}">
                                </label>

                                @error('app_version')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <label>
                                    Categoría:
                                    <br>
                                    <select name="app_categoria" value="{{old('app_categoria')}}">
                                        @foreach ($G_CategoriasApps as $categoria)
                                            <option value="{{$categoria->cat_nombre}}">{{$categoria->cat_nombre}}</option>
                                        @endforeach
                                    </select>
                                </label>

                                @error('app_categoria')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <label>
                                    Precio:
                                    <br>
                                    <input type="text" name="app_precio" value="{{old('app_precio')}}">
                                </label>

                                @error('app_precio')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <label>
                                    Aplicación: (Solo formato zip)
                                    <br>
                                    {{-- <input type="text" name="app_ruta" value="{{old('app_ruta')}}"> --}}
                                    <input type="file" name="aplicacion">
                                </label>

                                @error('app_ruta')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <label>
                                    Sitio web:
                                    <br>
                                    <input type="text" name="app_enlace" value="{{old('app_enlace')}}">
                                </label>

                                @error('app_enlace')
                                    <br>
                                    <small>*{{$message}}</small>
                                @enderror

                                <br>
                                <br>
                                <button class="btn btn-primary" type="submit">Enviar formulario</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/imagen.js'])
@endsection
