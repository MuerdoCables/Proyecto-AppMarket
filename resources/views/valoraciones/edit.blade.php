@extends('layouts.plantilla')

@section('title', 'Valoraciones edit')

@section('content')
    <h1>En esta página podrás editar una valoración</h1>
    <form action="{{route('valoraciones.update', $valoracion)}}" method="POST">

        @csrf

        @method('put')

        @error('val_usu_id')
            <small>*{{$message}}</small>
            <br>
        @enderror

        @error('val_app_id')
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label>
            Puntuación:
            <br>
            <input type="text" name="val_puntuacion" value="{{old('val_puntuacion', $valoracion->val_puntuacion)}}">
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
            <textarea name="val_texto" rows="5">{{old('val_texto', $valoracion->val_texto)}}</textarea>
        </label>

        @error('val_texto')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar reseña</button>
    </form>
@endsection
