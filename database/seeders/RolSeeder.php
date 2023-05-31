<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::factory()->create([
            'rol_nombre' => 'Administrador',
            'rol_descripcion' => 'El Admin',
        ]);
        Rol::factory(4)->create();
    }
}
