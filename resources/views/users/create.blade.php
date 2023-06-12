@extends('layouts.plantilla')

@section('title', 'Usuarios create')

@section('content')
    <h1>En esta página podrás crear un usuario</h1>
    <form action="{{route('users.store')}}" method="POST">

        @csrf

        <label>
            Nombre de usuario:
            <br>
            <input type="text" name="username" value="{{old('username')}}">
        </label>

        @error('username')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Email:
            <br>
            <input type="text" name="email" value="{{old('email')}}">
        </label>

        @error('email')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Contraseña:
            <br>
            <input type="text" name="password" value="{{old('password')}}">
        </label>

        @error('password')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
