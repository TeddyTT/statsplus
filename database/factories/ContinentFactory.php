<?php

namespace Database\Factories;

use App\Models\Continent;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Continent>
 */
class ContinentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, string>
     */
    public function definition()
    {
        return [
            'iso_code' => fake()->lexify('??'),
            'name' => fake()->word(),
        ];
    }
}
