<?php

namespace Database\Factories;

use App\Models\Livromasakik;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivromasakikFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livromasakik::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'isbn'   => $this->faker->ean13(),
            'autor'  => $this->faker->name
        ];
    }
}