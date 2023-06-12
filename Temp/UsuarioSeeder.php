<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::factory()->create([
            'usu_username' => 'Primero',
            'usu_email' => 'primero@hotmail.com',
            'usu_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'usu_nombre' => 'Primero',
            'usu_apellidos' => 'Primero',
            'usu_descripcion' => 'Lorem Ipsum',
            'usu_foto' => 'https://via.placeholder.com/640x480.png/001144?text=fuga',
            'usu_fenacimiento' => '14/02/23',
            'usu_telefono' => 123456789,
            'usu_pais' => 'España',
            'usu_rol_id' => 3,
            'usu_ban' => true,
        ]);
        Usuario::factory(100)->create();
    }
}
