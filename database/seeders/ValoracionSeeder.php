<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Valoracion;
use App\Models\Aplicacion;

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
        // Valoracion::factory(4)->create();
        
        for ($i = 1; $i <= Aplicacion::count(); $i++) {
            for ($j = 1; $j <= 5; $j++) {
                if ($i == 1 && $j == 1) continue;
                Valoracion::factory()->create([
                    'val_app_id' => $i,
                    'val_usu_id' => $j,
                ]);
            }
        }
    }
}
