<?php

namespace Database\Factories;

use App\Models\Draw;
use App\Models\NumberType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DrawNumber>
 */
class DrawNumberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'number' => fake()->randomNumber(2, true),
        ];
    }
}
