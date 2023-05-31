<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $usuarios = Usuario::orderBy('usu_id', 'desc')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreUsuarioRequest $request)
    {
        // $datos = $request->all();
        // if (empty($datos['usu_pais'])) {
        //     $ip = $request->ip();
        //     $country = geoip()->getLocation($ip);
        //     $datos['usu_foto'] = $country->country;
        //     if ($country->default == false) $datos['usu_pais'] = $country->country;
        // }
        // $usuario = Usuario::create($datos);
        // return redirect()->route('usuarios.show', $usuario);

        $usuario = Usuario::create($request->all());
        return redirect()->route('usuarios.show', $usuario);
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario')); // compact('usuario') == ['usuario' => $usuario]
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return redirect()->route('usuarios.show', $usuario);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
