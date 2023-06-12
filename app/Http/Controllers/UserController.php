<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreUserRequest $request)
    {
        // $datos = $request->all();
        // if (empty($datos['pais'])) {
        //     $ip = $request->ip();
        //     $country = geoip()->getLocation($ip);
        //     $datos['foto'] = $country->country;
        //     if ($country->default == false) $datos['pais'] = $country->country;
        // }
        // $user = User::create($datos);
        // return redirect()->route('users.show', $user);

        $user = User::create($request->all());
        return redirect()->route('users.show', $user);
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user')); // compact('user') == ['user' => $user]
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.show', $user);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
