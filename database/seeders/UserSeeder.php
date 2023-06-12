<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'Primero',
            'email' => 'primero@hotmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'nombre' => 'Primero',
            'apellidos' => 'Primero',
            'descripcion' => 'Lorem Ipsum',
            'foto' => 'https://via.placeholder.com/640x480.png/001144?text=fuga',
            'fecha_nacimiento' => '14/02/23',
            'telefono' => 123456789,
            'pais' => 'España',
            'rol' => 3,
            'ban' => true,
        ]);
        User::factory(100)->create();
    }
}
