<?php

namespace Database\Factories;

use App\Models\Route;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    protected $model = Route::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'grade_id' => $this->faker->randomDigitNotZero(),
            'club_id' => $this->faker->randomDigitNotZero(),
            'line_id' => $this->faker->randomDigitNotZero(),
            'color_id' => $this->faker->randomDigitNotZero(),
            'description' => $this->faker->sentence,
            'opening_date' => $this->faker->dateTimeBetween('-6 months', 'yesterday'),
            'closing_date' => $this->faker->dateTimeInInterval('today', '+2 months'),
        ];
    }
}
