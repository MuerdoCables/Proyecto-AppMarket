@extends('layouts.sesion')

@section('title', 'Inicio de sesión')

@section('tipoFormulario', 'Inicie sesión')

@section('content')
    <form class="requires-validation" action="{{ route('login') }}" method="POST">

        @csrf
                                    
        <div class="col-12">
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autofocus>

            @error('email')
                <small class="text-danger" role="alert">
                    <strong>* {{ $message }}</strong>
                </small>
            @enderror
        </div>

        <div class="col-12">
            <input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="Contraseña" required>

            @error('password')
                <small class="text-danger" role="alert">
                    <strong>* {{ $message }}</strong>
                </small>
            @enderror
        </div>

        {{-- <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Recordar sesión</label>
            </div>
        </div> --}}

        <br>
        <div class="text-center">
            <p class="text-center"><a href="{{ route('password.request') }}">¿Has olvidado la contraseña?</a></p>
        </div>

        <div class="form-button mt-4 text-center">
            <button id="submit" type="submit" class="btn btn-primary">Continuar</button>
        </div>
    </form>
@endsection
