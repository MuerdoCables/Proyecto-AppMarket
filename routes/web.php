<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ValoracionController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ----------------------------- HOME ----------------------------- */
Route::get('/', HomeController::class)->name('home');

/* ----------------------------- APP ----------------------------- */
Route::controller(AppController::class)->group(function() {
    Route::get('apps','index')->name('apps.index');
    // Route::get('apps/categorias/{categoria}','categorias')->name('apps.categorias');
    Route::get('apps/create','create')->name('apps.create');
    Route::post('apps','store')->name('apps.store');
    Route::get('apps/{app}','show')->name('apps.show');
    Route::get('apps/{app}/edit','edit')->name('apps.edit');
    Route::put('apps/{app}','update')->name('apps.update');
    Route::delete('apps/{app}','destroy')->name('apps.destroy');
});

/* ----------------------------- COMENTARIO ----------------------------- */
Route::controller(ComentarioController::class)->group(function() {
    Route::get('comentarios','index')->name('comentarios.index');
    Route::get('comentarios/create','create')->name('comentarios.create');
    Route::post('comentarios','store')->name('comentarios.store');
    Route::get('comentarios/{comentario}','show')->name('comentarios.show');
    Route::get('comentarios/{comentario}/edit','edit')->name('comentarios.edit');
    Route::put('comentarios/{comentario}','update')->name('comentarios.update');
    Route::delete('comentarios/{comentario}','destroy')->name('comentarios.destroy');
});

/* ----------------------------- ROL ----------------------------- */
Route::controller(RolController::class)->group(function() {
    Route::get('roles','index')->name('roles.index');
    Route::get('roles/create','create')->name('roles.create');
    Route::post('roles','store')->name('roles.store');
    Route::get('roles/{rol}','show')->name('roles.show');
    Route::get('roles/{rol}/edit','edit')->name('roles.edit');
    Route::put('roles/{rol}','update')->name('roles.update');
    Route::delete('roles/{rol}','destroy')->name('roles.destroy');
});

/* ----------------------------- USUARIO ----------------------------- */
Route::controller(UsuarioController::class)->group(function() {
    Route::get('usuarios','index')->name('usuarios.index');
    Route::get('usuarios/create','create')->name('usuarios.create');
    Route::post('usuarios','store')->name('usuarios.store');
    Route::get('usuarios/{usuario}','show')->name('usuarios.show');
    Route::get('usuarios/{usuario}/edit','edit')->name('usuarios.edit');
    Route::put('usuarios/{usuario}','update')->name('usuarios.update');
    Route::delete('usuarios/{usuario}','destroy')->name('usuarios.destroy');
});

/* ----------------------------- VALORACIÓN ----------------------------- */
Route::controller(ValoracionController::class)->group(function() {
    Route::get('valoraciones','index')->name('valoraciones.index');
    Route::get('valoraciones/create','create')->name('valoraciones.create');
    Route::post('valoraciones','store')->name('valoraciones.store');
    Route::get('valoraciones/{valoracion}','show')->name('valoraciones.show');
    Route::get('valoraciones/{valoracion}/edit','edit')->name('valoraciones.edit');
    Route::put('valoraciones/{valoracion}','update')->name('valoraciones.update');
    Route::delete('valoraciones/{valoracion}','destroy')->name('valoraciones.destroy');
});

/* ----------------------------- CATEGORÍA ----------------------------- */
Route::controller(CategoriaController::class)->group(function() {
    Route::get('categorias','index')->name('categorias.index');
    Route::get('categorias/create','create')->name('categorias.create');
    Route::post('categorias','store')->name('categorias.store');
    Route::get('categorias/{categoria}','show')->name('categorias.show');
    Route::get('categorias/{categoria}/edit','edit')->name('categorias.edit');
    Route::put('categorias/{categoria}','update')->name('categorias.update');
    Route::delete('categorias/{categoria}','destroy')->name('categorias.destroy');
});