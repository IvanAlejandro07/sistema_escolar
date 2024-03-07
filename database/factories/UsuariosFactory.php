<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'contrasena' => bcrypt('password'), // Recuerda cambiar 'password' por la contraseña que desees
            'tipoUsuario' => $this->faker->randomElement(['admin', 'cliente', 'empleado']), // Tipo de usuario aleatorio
            'activo' => $this->faker->boolean(80), // Probabilidad del 80% de estar activo
        ];
    }
}
