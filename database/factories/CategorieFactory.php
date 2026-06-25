<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Categorie>
 */
class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->randomElement([
                'Poucet',
                'Poussin',
                'Benjamin',
                'Minime',
                'Cadet',
                'Junior',
                'Senior'
            ]),
            'gender' => fake()->randomElement(['M', 'F']),
            'weight' => fake()->numberBetween(20, 120),
        ];

    }
}
