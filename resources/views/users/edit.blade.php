@extends('layouts.plantilla')

@section('title', 'Usuarios edit')

@section('content')
    <h1>En esta página podrás editar un usuario</h1>
    <form action="{{route('users.update', $user)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre de usuario:
            <br>
            <input type="text" name="username" value="{{old('username', $user->username)}}">
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
            <input type="text" name="email" value="{{old('email', $user->email)}}">
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
            <input type="text" name="password" value="{{old('password', $user->password)}}">
        </label>

        @error('password')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $user->nombre)}}">
        </label>

        @error('nombre')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Apellidos:
            <br>
            <input type="text" name="apellidos" value="{{old('apellidos', $user->apellidos)}}">
        </label>

        @error('apellidos')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $user->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Foto del perfil:
            <br>
            <input type="text" name="foto" value="{{old('foto', $user->foto)}}">
        </label>

        @error('foto')
            <br>
            <small>*{{$message}}</small>
        @enderror
        
        <br>
        <br>
        <label>
            Fecha de nacimiento:
            <br>
            <input type="text" name="fecha_nacimiento" value="{{old('fecha_nacimiento', $user->fecha_nacimiento)}}">
        </label>

        @error('fecha_nacimiento')
            <br>
            <small>*{{$message}}</small>
        @enderror
        
        <br>
        <br>
        <label>
            Teléfono:
            <br>
            <input type="text" name="telefono" value="{{old('telefono', $user->telefono)}}">
        </label>

        @error('telefono')
            <br>
            <small>*{{$message}}</small>
        @enderror
        
        <br>
        <br>
        <label>
            País:
            <br>
            <input type="text" name="pais" value="{{old('pais', $user->pais)}}">
        </label>

        @error('pais')
            <br>
            <small>*{{$message}}</small>
        @enderror
 
        <br>
        <br>
        <label>
            Rol:
            <br>
            <input type="text" name="rol" value="{{old('rol', $user->rol)}}">
        </label>

        @error('rol')
            <br>
            <small>*{{$message}}</small>
        @enderror

         
        <br>
        <br>
        <label>
            Banear:
            <br>
            <input type="text" name="ban" value="{{old('ban', $user->ban)}}">
        </label>

        @error('ban')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
