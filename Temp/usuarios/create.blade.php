@extends('layouts.plantilla')

@section('title', 'Usuarios create')

@section('content')
    <h1>En esta página podrás crear un usuario</h1>
    <form action="{{route('usuarios.store')}}" method="POST">

        @csrf

        <label>
            Nombre de usuario:
            <br>
            <input type="text" name="usu_username" value="{{old('usu_username')}}">
        </label>

        @error('usu_username')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Email:
            <br>
            <input type="text" name="usu_email" value="{{old('usu_email')}}">
        </label>

        @error('usu_email')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Contraseña:
            <br>
            <input type="text" name="usu_password" value="{{old('usu_password')}}">
        </label>

        @error('usu_password')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
