<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAppRequest;
use App\Http\Requests\UpdateAppRequest;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra un listado del recurso.
     */
    public function index()
    {
        $apps = App::orderBy('app_id', 'desc')->paginate(40);
        return view('apps.index', compact('apps'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        return view('apps.create');
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(StoreAppRequest $request)
    {
        /*
        $app = new App();
        $app->name = $request->name;
        $app->descripcion = $request->descripcion;
        $app->categoria = $request->categoria;
        $app->save();
        */
        $app = App::create($request->all());
        return redirect()->route('apps.show', $app);
    }

    /**
     * Display the specified resource.
     * Muestra el recurso especificado.
     */
    public function show(App $app)
    {
        $usuario = DB::table('usuarios')->leftJoin('apps', 'usuarios.usu_id', '=', 'apps.app_usu_id')->where('app_id', $app->app_id)->first();
        $valoraciones = DB::table('valoraciones')->leftJoin('apps', 'valoraciones.val_app_id', '=', 'apps.app_id')->where('app_id', $app->app_id)->get();
        return view('apps.show', compact('app', 'usuario', 'valoraciones')); // compact('app') == ['app' => $app]
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit(App $app)
    {
        return view('apps.edit', compact('app'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(UpdateAppRequest $request, App $app)
    {
        $app->update($request->all());
        return redirect()->route('apps.show', $app);
    }

    /**
     * Remove the specified resource from storage.
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy(App $app)
    {
        $app->delete();
        return redirect()->route('apps.index');
    }
}
