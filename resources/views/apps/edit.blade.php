@extends('layouts.plantilla')

@section('title', 'Apps edit')

@section('content')
    <h1>En esta página podrás editar un app</h1>
    <form action="{{route('apps.update', $app)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Usuario:
            <br>
            <input type="text" name="app_usu_id" value="{{old('app_usu_id', $app->app_usu_id)}}">
        </label>

        @error('app_usu_id')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Nombre de la aplicación:
            <br>
            <input type="text" name="app_nombre" value="{{old('app_nombre', $app->app_nombre)}}">
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
            <input type="text" name="app_icono" value="{{old('app_icono', $app->app_icono)}}">
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
            <textarea name="app_descripcion" rows="5">{{old('app_descripcion', $app->app_descripcion)}}</textarea>
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
            <input type="text" name="app_version" value="{{old('app_version', $app->app_version)}}">
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
            <input type="text" name="app_categoria" value="{{old('app_categoria', $app->app_categoria)}}">
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
            <input type="text" name="app_precio" value="{{old('app_precio', $app->app_precio)}}">
        </label>

        @error('app_precio')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Aplicación:
            <br>
            <input type="text" name="app_ruta" value="{{old('app_ruta', $app->app_ruta)}}">
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
            <input type="text" name="app_enlace" value="{{old('app_enlace', $app->app_enlace)}}">
        </label>

        @error('app_enlace')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
