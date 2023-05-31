@extends('layouts.plantilla')

@section('title', 'Usuarios edit')

@section('content')
    <h1>En esta página podrás editar un usuario</h1>
    <form action="{{route('usuarios.update', $usuario)}}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre de usuario:
            <br>
            <input type="text" name="usu_username" value="{{old('usu_username', $usuario->usu_username)}}">
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
            <input type="text" name="usu_email" value="{{old('usu_email', $usuario->usu_email)}}">
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
            <input type="text" name="usu_password" value="{{old('usu_password', $usuario->usu_password)}}">
        </label>

        @error('usu_password')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="usu_nombre" value="{{old('usu_nombre', $usuario->usu_nombre)}}">
        </label>

        @error('usu_nombre')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Apellidos:
            <br>
            <input type="text" name="usu_apellidos" value="{{old('usu_apellidos', $usuario->usu_apellidos)}}">
        </label>

        @error('usu_apellidos')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Descripción:
            <br>
            <textarea name="usu_descripcion" rows="5">{{old('usu_descripcion', $usuario->usu_descripcion)}}</textarea>
        </label>

        @error('usu_descripcion')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <label>
            Foto del perfil:
            <br>
            <input type="text" name="usu_foto" value="{{old('usu_foto', $usuario->usu_foto)}}">
        </label>

        @error('usu_foto')
            <br>
            <small>*{{$message}}</small>
        @enderror
        
        <br>
        <br>
        <label>
            Fecha de nacimiento:
            <br>
            <input type="text" name="usu_fenacimiento" value="{{old('usu_fenacimiento', $usuario->usu_fenacimiento)}}">
        </label>

        @error('usu_fenacimiento')
            <br>
            <small>*{{$message}}</small>
        @enderror
        
        <br>
        <br>
        <label>
            Teléfono:
            <br>
            <input type="text" name="usu_telefono" value="{{old('usu_telefono', $usuario->usu_telefono)}}">
        </label>

        @error('usu_telefono')
            <br>
            <small>*{{$message}}</small>
        @enderror
        
        <br>
        <br>
        <label>
            País:
            <br>
            <input type="text" name="usu_pais" value="{{old('usu_pais', $usuario->usu_pais)}}">
        </label>

        @error('usu_pais')
            <br>
            <small>*{{$message}}</small>
        @enderror
 
        <br>
        <br>
        <label>
            Rol:
            <br>
            <input type="text" name="usu_rol_id" value="{{old('usu_rol_id', $usuario->usu_rol_id)}}">
        </label>

        @error('usu_rol_id')
            <br>
            <small>*{{$message}}</small>
        @enderror

         
        <br>
        <br>
        <label>
            Banear:
            <br>
            <input type="text" name="usu_ban" value="{{old('usu_ban', $usuario->usu_ban)}}">
        </label>

        @error('usu_ban')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
