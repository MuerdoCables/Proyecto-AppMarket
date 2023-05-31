<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRolRequest;
use App\Http\Requests\UpdateRolRequest;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $roles = Rol::orderBy('rol_id', 'desc')->paginate();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreRolRequest $request)
    {
        $rol = Rol::create($request->all());
        return redirect()->route('roles.show', $rol);
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(Rol $rol)
    {
        return view('roles.show', compact('rol')); // compact('rol') == ['rol' => $rol]
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Rol $rol)
    {
        return view('roles.edit', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateRolRequest $request, Rol $rol)
    {
        $rol->update($request->all());
        return redirect()->route('roles.show', $rol);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Rol $rol)
    {
        $rol->delete();
        return redirect()->route('roles.index');
    }
}
