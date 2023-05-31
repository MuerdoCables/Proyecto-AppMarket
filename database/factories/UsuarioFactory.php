<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Rol;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usu_username' => $this->faker->unique()->userName(),
            'usu_email' => $this->faker->unique()->safeEmail(),
            'usu_password' => $this->faker->password(),
            'usu_nombre' => $this->faker->name(),
            'usu_apellidos' => $this->faker->firstName(),
            'usu_descripcion' => $this->faker->paragraph(),
            'usu_foto' => $this->faker->imageUrl(),
            'usu_fenacimiento' => $this->faker->dateTimeBetween(),
            'usu_telefono' => $this->faker->numberBetween(100000000, 999999999),
            // 'usu_telefono' => $this->faker->phoneNumber(),
            'usu_pais' => $this->faker->country(),
            // 'usu_rol_id' => Rol::inRandomOrder()->first()->rol_id,
            // 'usu_rol_id' => $this->faker->numberBetween(1,5), //[0,5]
            // 'usu_ban' => $this->faker->bool(),
        ];
    }
}
