@extends('layouts.plantilla')

@section('title', 'Roles create')

@section('content')
    <h1>En esta página podrás crear un rol</h1>
    <form action="{{route('roles.store')}}" method="POST">

        @csrf

        <label>
            Código:
            <br>
            <input type="text" name="rol_id" value="{{old('rol_id')}}">
        </label>

        @error('rol_id')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Nombre del rol:
            <br>
            <input type="text" name="rol_nombre" value="{{old('rol_nombre')}}">
        </label>

        @error('rol_nombre')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Descripción:
            <br>
            <input type="text" name="rol_descripcion" value="{{old('rol_descripcion')}}">
        </label>

        @error('rol_descripcion')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
