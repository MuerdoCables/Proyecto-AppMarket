@extends('layouts.plantilla')

@section('title', 'Categorias create')

@section('content')
    <h1>En esta página podrás crear un categoría</h1>
    <form action="{{route('categorias.store')}}" method="POST">

        @csrf

        <label>
            Categorías:
            <br>
            <input type="text" name="cat_nombre" value="{{old('cat_nombre')}}">
        </label>

        @error('cat_nombre')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
