<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aplicacion;

class AplicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Primera App',
            'app_icono' => 'https://via.placeholder.com/640x480.png/001144?text=fuga',
            'app_descripcion' => 'Lorem Ipsum',
            'app_version' => '2.0.1',
            'app_categoria' => 'Otros',
            // 'app_categoria' => NULL,
            'app_precio' => 0.00,
            'app_ruta' => 'https://via.placeholder.com/640x480.png/001144?text=fuga',
            'app_enlace' => 'https://via.placeholder.com/640x480.png/001144?text=fuga',
            'app_obsoleto' => false,
        ]);
        Aplicacion::factory(150)->create();
    }
}
