<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $G_CategoriasApps = Categoria::orderBy('cat_id', 'desc')->get();
        View::share('G_CategoriasApps', $G_CategoriasApps);
    }
}