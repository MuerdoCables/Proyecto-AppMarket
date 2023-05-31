@extends('layouts.plantilla')

@section('title', 'Comentarios edit')

@section('content')
    <h1>En esta página podrás editar un comentario</h1>
    <form action="{{route('comentarios.update', $comentario)}}" method="POST">

        @csrf

        @method('put')

       <label>
            Valoración:
            <br>
            <input type="text" name="com_val_id" value="{{old('com_val_id', $comentario->com_val_id)}}">
        </label>

        @error('com_val_id')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Usuario:
            <br>
            <input type="text" name="com_usu_id" value="{{old('com_usu_id', $comentario->com_usu_id)}}">
        </label>

        @error('com_usu_id')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Texto:
            <br>
            <textarea name="com_texto" rows="5">{{old('com_texto', $comentario->com_texto)}}</textarea>
        </label>

        @error('com_texto')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
