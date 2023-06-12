<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Aplicacion;
use App\Models\Categoria;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aplicacion>
 */
class AplicacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'app_usu_id' => User::inRandomOrder()->first()->id,
            'app_nombre' => $this->faker->unique()->name(),
            'app_icono' => $this->faker->imageUrl(),
            'app_descripcion' => $this->faker->paragraph(),
            'app_version' => $this->faker->semver(false, false),
            'app_categoria' => Categoria::inRandomOrder()->first()->cat_nombre,
            'app_precio' => $this->faker->randomFloat(2, 0, 100),
            'app_ruta' => $this->faker->url(),
            'app_enlace' => $this->faker->url(),
            'app_obsoleto' => false,
        ];
    }
}
