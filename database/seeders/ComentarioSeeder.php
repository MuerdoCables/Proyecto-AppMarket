<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comentario::factory()->create([
            'com_val_id' => 1,
            'com_usu_id' => 2,
            'com_texto' => 'Lorem Ipsum',
        ]);
        Comentario::factory(4)->create();
    }
}
