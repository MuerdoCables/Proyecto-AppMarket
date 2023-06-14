<?php

namespace App\Http\Controllers;

use App\Models\Aplicacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAplicacionRequest;
use App\Http\Requests\UpdateAplicacionRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Valoracion;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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
        if (!$request->hasFile('aplicacion') || !$request->hasFile('aplicacion')) return redirect()->back();
        $aplicacion = Aplicacion::create($request->except(['icono', 'aplicacion']));
        if ($request->hasFile('icono')) {
            $ruta = Storage::disk('public')->put('app_iconos', $request->file('icono'));
            $aplicacion->app_icono = basename($ruta);
            $aplicacion->save();
        }
        // $aplicacion->app_icono = "predeterminados/app.png";
        if ($request->hasFile('aplicacion')) {
            $ruta = Storage::disk('public')->put('app_rutas', $request->file('aplicacion'));
            $aplicacion->app_ruta = basename($ruta);
            $aplicacion->save();
        }
        return redirect()->route('aplicaciones.show', compact('aplicacion'));
    }

    // public function store2(StoreAplicacionRequest $request)
    // {
    //     /*
    //     $aplicacion = new Aplicacion();
    //     $aplicacion->name = $request->name;
    //     $aplicacion->descripcion = $request->descripcion;
    //     $aplicacion->categoria = $request->categoria;
    //     $aplicacion->save();
    //     */
    //     // dd($request);

    //     // $aplicacion = Aplicacion::create($request->all());
    //     $aplicacion = Aplicacion::create($request->except(['icono', 'aplicacion']));
    //     if ($request->hasFile('icono')) $aplicacion->app_icono = Storage::disk('public')->put('app_iconos', $request->file('icono'));
    //     else $aplicacion->app_icono = "predeterminados/app.png";
    //     if ($request->hasFile('aplicacion')) $aplicacion->app_ruta = Storage::disk('public')->put('app_rutas', $request->file('aplicacion'));
    //     // if ($request->hasFile('aplicacion')) $aplicacion->app_ruta = $request->file('aplicacion')->store('app_rutas');
    //     $aplicacion->save();
    //     return redirect()->route('aplicaciones.show', $aplicacion);
    // }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(Aplicacion $aplicacion)
    {
        $user = User::where('id', $aplicacion->app_usu_id)->first();
        $valoraciones = Valoracion::leftJoin('users', 'valoraciones.val_usu_id', '=', 'users.id')
            ->where('val_app_id', $aplicacion->app_id)->orderBy('val_id', 'desc')->paginate(10);
        if (Auth::check() == true) $valoracion = Valoracion::where('val_app_id', $aplicacion->app_id)->where('val_usu_id', Auth::user()->id)->first();
        else $valoracion = null;
        return view('aplicaciones.show', compact('aplicacion', 'user', 'valoraciones', 'valoracion')); // compact('aplicacion') == ['aplicacion' => $aplicacion]
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
        if (!$request->hasFile('aplicacion') || !$request->hasFile('aplicacion')) return redirect()->back();
        $aplicacion->update::create($request->except(['icono', 'aplicacion']));
        if ($request->hasFile('icono')) {
            $ruta = Storage::disk('public')->put('app_iconos', $request->file('icono'));
            $aplicacion->app_icono = basename($ruta);
            $aplicacion->save();
        }
        if ($request->hasFile('aplicacion')) {
            $ruta = Storage::disk('public')->put('app_rutas', $request->file('aplicacion'));
            $aplicacion->app_ruta = basename($ruta);
            $aplicacion->save();
        }
        return redirect()->route('aplicaciones.show', compact('aplicacion'));
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
