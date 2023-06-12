<?php

namespace App\Http\Controllers;

use App\Models\Valoracion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreValoracionRequest;
use App\Http\Requests\UpdateValoracionRequest;

class ValoracionController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $valoraciones = Valoracion::orderBy('val_id', 'desc')->paginate();
        return view('valoraciones.index', compact('valoraciones'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('valoraciones.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreValoracionRequest $request)
    {
        // $valoracion = Valoracion::create($request->all());
        Valoracion::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(Valoracion $valoracion)
    {
        return view('valoraciones.show', compact('valoracion')); // compact('valoracion') == ['valoracion' => $valoracion]
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Valoracion $valoracion)
    {
        return view('valoraciones.edit', compact('valoracion'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateValoracionRequest $request, Valoracion $valoracion)
    {
        $valoracion->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Valoracion $valoracion)
    {
        $valoracion->delete();
        return redirect()->back();
    }
}
