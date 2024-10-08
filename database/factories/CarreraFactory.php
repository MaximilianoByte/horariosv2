<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrera>
 */
class CarreraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo=fake()->jobTitle();
        return [
            'idcarrera'=>fake()->bothify("????####"),
            'nombredepto'=>$titulo,
            'nombremediano' => fake()->lexify(str_repeat('?', 15)), // Genera 15 letras aleatorias
            'nombrecorto' =>substr($titulo,5),//traer 5 letras del propio titulo
            "depto_id"=>Depto::factory(),
        ];
    }
}
