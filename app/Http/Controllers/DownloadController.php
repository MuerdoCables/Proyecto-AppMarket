<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Aplicacion;

class DownloadController extends Controller
{
    public function descargar ($archivo) {
        $app = Aplicacion::where('app_ruta', $archivo)->first();
        $nombre = $app->app_nombre . '.zip';
        // $nombre = $app->app_nombre;
        $ruta = storage_path("app/public/app_rutas/" . $archivo);
        return response()->download($ruta, $nombre);
    }
}
