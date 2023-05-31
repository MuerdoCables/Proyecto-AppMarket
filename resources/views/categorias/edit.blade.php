@extends('layouts.plantilla')

@section('title', 'Categorias edit')

@section('content')
    <h1>En esta página podrás editar un categoría</h1>
    <form action="{{route('categorias.update', $categoria)}}" method="POST">

        @csrf

        @method('put')

       <label>
            Categoría:
            <br>
            <input type="text" name="cat_nombre" value="{{old('cat_nombre', $categoria->cat_nombre)}}">
        </label>

        @error('cat_nombre')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
