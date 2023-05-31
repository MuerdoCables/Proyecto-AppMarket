<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Valoracion;

class ValoracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Valoracion::factory()->create([
            'val_app_id' => 1,
            'val_usu_id' => 1,
            'val_puntuacion' => 3,
            'val_texto' => 'Lorem Ipsum',
        ]);
        Valoracion::factory(4)->create();
    }
}
