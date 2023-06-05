<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Aplicacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('cat_id', 'desc')->paginate();
        return view('categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreCategoriaRequest $request)
    {
        $categoria = Categoria::create($request->all());
        return redirect()->route('categorias.show', $categoria);
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(Categoria $categoria)
    {
        if ($categoria->cat_nombre == 'Otros') $aplicaciones = Aplicacion::where('app_categoria', $categoria->cat_nombre)->orWhereNull('app_categoria')->orderBy('app_id', 'desc')->paginate(40);
        else $aplicaciones = Aplicacion::where('app_categoria', $categoria->cat_nombre)->orderBy('app_id', 'desc')->paginate(40);
        return view('categorias.show', compact('aplicaciones', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->all());
        return redirect()->route('categorias.show', $categoria);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
