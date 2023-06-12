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

        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'WhatsApp',
            'app_icono' => '/imgs/rrss/whatsapp.png',
            'app_categoria' => 'Redes Sociales',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Instagram',
            'app_icono' => '/imgs/rrss/instagram.png',
            'app_categoria' => 'Redes Sociales',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Discord',
            'app_icono' => '/imgs/rrss/discord.png',
            'app_categoria' => 'Redes Sociales',
        ]);

        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Ajedrez',
            'app_icono' => '/imgs/juegos/ajedrez.jpg',
            'app_categoria' => 'Juegos',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Amongus',
            'app_icono' => '/imgs/juegos/amongus.jpg',
            'app_categoria' => 'Juegos',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Buscaminas',
            'app_icono' => '/imgs/juegos/buscaminas.png',
            'app_categoria' => 'Juegos',
        ]);
        
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Facebook',
            'app_icono' => '/imgs/rrss/facebook.jpg',
            'app_categoria' => 'Redes Sociales',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Twitter',
            'app_icono' => '/imgs/rrss/twitter.png',
            'app_categoria' => 'Redes Sociales',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Telegram',
            'app_icono' => '/imgs/rrss/telegram.png',
            'app_categoria' => 'Redes Sociales',
        ]);

        
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Minecraft',
            'app_icono' => '/imgs/juegos/minecraft.jpg',
            'app_categoria' => 'Juegos',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Pacman',
            'app_icono' => '/imgs/juegos/pacman.jpg',
            'app_categoria' => 'Juegos',
        ]);
        Aplicacion::factory()->create([
            'app_usu_id' => 1,
            'app_nombre' => 'Pokemon',
            'app_icono' => '/imgs/juegos/pokemon.png',
            'app_categoria' => 'Juegos',
        ]);
    }
}
