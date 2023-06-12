@extends('layouts.sesion')

@section('title', 'Registro')

@section('tipoFormulario', 'Regístrate')

@section('content')
    <form class="requires-validation" action="{{ route('register') }}" method="POST">

        @csrf

        <div class="col-12">
            <input class="form-control" type="text" name="username" value="{{ old('username') }}" placeholder="Nombre de usuario" required autofocus>

            @error('username')
                <small class="text-danger" role="alert">
                    <strong>* {{ $message }}</strong>
                </small>
            @enderror
        </div>

        <div class="col-12">
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>

            @error('email')
                <small class="text-danger" role="alert">
                    <strong>* {{ $message }}</strong>
                </small>
            @enderror
        </div>

        <div class="col-12">
            <input id="password" class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña" required>

            @error('password')
                <small class="text-danger" role="alert">
                    <strong>* {{ $message }}</strong>
                </small>
            @enderror
        </div>

        <div class="col-12">
            <input id="password-confirm" class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirmar la contraseña" required>

            {{-- @error('password_confirmation')
                <small class="text-danger" role="alert">
                    <strong>* {{ $message }}</strong>
                </small>
            @enderror --}}
        </div>

        <div class="form-button mt-4 text-center">
            <button id="submit" type="submit" class="btn btn-primary">Registrarse</button>
        </div>

        <div class="col-12 text-center mt-3">
            <small class="text-light">¿Ya tiene una cuenta? <a href="{{ route('login') }}">Iniciar sesión</a></small>
        </div>

    </form>
@endsection
