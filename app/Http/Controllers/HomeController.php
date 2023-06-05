<?php

namespace App\Http\Controllers;

use App\Models\Aplicacion;
use App\Models\Categoria;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        // return view('welcome');
        // return view('home');
        $categorias = Categoria::orderBy('cat_id', 'desc')->get();
        foreach ($categorias as $categoria) {
            if ($categoria->cat_nombre == 'Otros') $aplicaciones[$categoria->cat_nombre] = Aplicacion::where('app_categoria', $categoria->cat_nombre)->orWhereNull('app_categoria')->orderBy('app_id', 'desc')->paginate(12);
            else $aplicaciones[$categoria->cat_nombre] = Aplicacion::where('app_categoria', $categoria->cat_nombre)->orderBy('app_id', 'desc')->paginate(12);
        }
        return view('home', compact('aplicaciones', 'categorias'));
    }
}
