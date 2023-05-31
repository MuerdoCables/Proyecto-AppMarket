<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComentarioRequest;
use App\Http\Requests\UpdateComentarioRequest;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $comentarios = Comentario::orderBy('com_id', 'desc')->paginate();
        return view('comentarios.index', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('comentarios.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreComentarioRequest $request)
    {
        $comentario = Comentario::create($request->all());
        return redirect()->route('comentarios.show', $comentario);
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(Comentario $comentario)
    {
        return view('comentarios.show', compact('comentario')); // compact('comentario') == ['comentario' => $comentario]
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Comentario $comentario)
    {
        return view('comentarios.edit', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateComentarioRequest $request, Comentario $comentario)
    {
        $comentario->update($request->all());
        return redirect()->route('comentarios.show', $comentario);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('comentarios.index');
    }
}
