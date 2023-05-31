@extends('layouts.plantilla')

@section('title', 'Comentarios create')

@section('content')
    <h1>En esta página podrás crear un comentario</h1>
    <form action="{{route('comentarios.store')}}" method="POST">

        @csrf

        <label>
            Valoración:
            <br>
            <input type="text" name="com_val_id" value="{{old('com_val_id')}}">
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
            <input type="text" name="com_usu_id" value="{{old('com_usu_id')}}">
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
            <textarea name="com_texto" rows="5">{{old('com_texto')}}</textarea>
        </label>

        @error('com_texto')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
