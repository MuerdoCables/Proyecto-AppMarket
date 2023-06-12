@extends('layouts.sesion')

@section('title', 'Inicio de sesión')

@section('tipoFormulario', 'Inicie sesión')

<form class="requires-validation" action="{{route('login.authenticate')}}" method="POST">

    @csrf
                                
    <div class="col-12">
        <input class="form-control" type="email" name="usu_email" value="{{old('usu_email')}}" placeholder="Correo electrónico" required>
    </div>

    <div class="col-12">
        <input class="form-control" type="password" name="usu_password" value="{{old('usu_password')}}" placeholder="Contraseña" required>
    </div>

    <br>
    <div class="text-center">
        <p class="text-center"><a href="#">¿Has olvidado la contraseña?</a></p>
    </div>

    <div class="form-button mt-4 text-center">
        <button id="submit" type="submit" class="btn btn-primary">Continuar</button>
    </div>
</form>
                    