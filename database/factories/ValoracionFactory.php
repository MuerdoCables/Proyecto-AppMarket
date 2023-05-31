<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Valoracion;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Valoracion>
 */
class ValoracionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idValoracion = $this->faker->unique()->randomElements([1, 2, 3, 4, 5], 2, true);
        if ($idValoracion == [1, 1]) $idValoracion = $this->faker->unique()->randomElements([1, 2, 3, 4, 5], 2, true);
        return [
            'val_app_id' => $idValoracion[0],
            'val_usu_id' => $idValoracion[1],
            'val_puntuacion' => $this->faker->numberBetween(0, 10),
            'val_texto' => $this->faker->paragraph(),
        ];
    }
}
