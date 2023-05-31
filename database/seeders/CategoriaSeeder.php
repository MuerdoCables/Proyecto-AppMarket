<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::factory()->create(['cat_nombre' => 'Otros']);
        Categoria::factory()->create(['cat_nombre' => 'Redes Sociales']);
        Categoria::factory()->create(['cat_nombre' => 'Juegos']);
        Categoria::factory()->create(['cat_nombre' => 'Entretenimiento']);
        Categoria::factory()->create(['cat_nombre' => 'Navegadores']);

        Categoria::factory(0)->create();
    }
}
