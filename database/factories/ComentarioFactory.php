<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comentario;
use App\Models\Valoracion;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'com_val_id' => Valoracion::inRandomOrder()->first()->val_id,
            'com_usu_id' => User::inRandomOrder()->first()->id,
            'com_texto' => $this->faker->paragraph(),
        ];
    }
}
