@extends('layouts.plantilla')

@section('title', 'Valoraciones create')

@section('content')
    <h1>En esta página podrás crear una valoración</h1>
    <form action="{{route('valoraciones.store')}}" method="POST">

        @csrf

        <input type="hidden" name="val_usu_id" value="{{ Auth::user()->id }}">
        @error('val_usu_id')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <input type="hidden" name="val_app_id" value="{{ $aplicacion->app_id }}">
        @error('val_app_id')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label>
            Puntuación:
            <br>
            <input type="text" name="val_puntuacion" value="{{old('val_puntuacion')}}">
        </label>

        @error('val_puntuacion')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Texto:
            <br>
            <textarea name="val_texto" rows="5">{{old('val_texto')}}</textarea>
        </label>

        @error('val_texto')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Crear reseña</button>
    </form>
@endsection
