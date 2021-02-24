<?php

namespace Database\Factories;

use App\Models\Menor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->sentence(20),
            'apellidos' => $this->faker->sentence(20),
            'registro_civil' => $this->faker->sentence(20),
            'ciudad' => $this->faker->sentence(20),
            'direccion' => $this->faker->sentence(20),
            'fecha_nacimiento' => '2011-05-05',
        ];
    }
}
