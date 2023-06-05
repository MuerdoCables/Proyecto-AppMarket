<?php

namespace App\Http\Controllers;

use App\Models\Aplicacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAplicacionRequest;
use App\Http\Requests\UpdateAplicacionRequest;
use Illuminate\Support\Facades\DB;

class AplicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $aplicaciones = Aplicacion::orderBy('app_id', 'desc')->paginate(40);
        return view('aplicaciones.index', compact('aplicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('aplicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreAplicacionRequest $request)
    {
        /*
        $aplicacion = new Aplicacion();
        $aplicacion->name = $request->name;
        $aplicacion->descripcion = $request->descripcion;
        $aplicacion->categoria = $request->categoria;
        $aplicacion->save();
        */
        $aplicacion = Aplicacion::create($request->all());
        return redirect()->route('aplicaciones.show', $aplicacion);
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(Aplicacion $aplicacion)
    {
        $usuario = DB::table('usuarios')->where('usu_id', $aplicacion->app_usu_id)->first();
        $valoraciones = DB::table('valoraciones')->leftJoin('usuarios', 'valoraciones.val_usu_id', '=', 'usuarios.usu_id')
            ->where('val_app_id', $aplicacion->app_id)->orderBy('val_id', 'desc')->paginate(2);
        return view('aplicaciones.show', compact('aplicacion', 'usuario', 'valoraciones')); // compact('aplicacion') == ['aplicacion' => $aplicacion]
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Aplicacion $aplicacion)
    {
        return view('aplicaciones.edit', compact('aplicacion'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateAplicacionRequest $request, Aplicacion $aplicacion)
    {
        $aplicacion->update($request->all());
        return redirect()->route('aplicaciones.show', $aplicacion);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Aplicacion $aplicacion)
    {
        $aplicacion->delete();
        return redirect()->route('aplicaciones.index');
    }
}
