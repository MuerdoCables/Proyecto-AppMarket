@extends('layouts.plantilla')

@section('title', 'Valoraciones create')

@section('content')
    <h1>En esta página podrás crear un valoración</h1>
    <form action="{{route('valoraciones.store')}}" method="POST">

        @csrf

        <label>
            App:
            <br>
            <input type="text" name="val_app_id" value="{{old('val_app_id')}}">
        </label>

        @error('val_app_id')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Usuario:
            <br>
            <input type="text" name="val_usu_id" value="{{old('val_usu_id')}}">
        </label>

        @error('val_usu_id')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
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
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
