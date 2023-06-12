<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
// use App\Models\Rol;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'password' => $this->faker->password(),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->firstName(),
            'descripcion' => $this->faker->paragraph(),
            'foto' => $this->faker->imageUrl(),
            'fecha_nacimiento' => $this->faker->dateTimeBetween(),
            'telefono' => $this->faker->numberBetween(100000000, 999999999),
            // 'telefono' => $this->faker->phoneNumber(),
            'pais' => $this->faker->country(),
            'remember_token' => Str::random(10),
            // 'rol' => Rol::inRandomOrder()->first()->rol_id,
            // 'ban' => $this->faker->bool(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
