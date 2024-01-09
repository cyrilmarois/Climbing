<?php

namespace Database\Factories;

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
            'name' => $this->faker->name,
            'grade_id' => $this->faker->randomNumber(),
            'club_id' => $this->faker->randomNumber(),
            'line_id' => $this->faker->randomNumber(),
            'color_id' => $this->faker->randomNumber(),
            'description' => $this->faker->sentence,
            'opening_date' => $this->faker->dateTimeBetween('-2 months', 'today'),
            'closing_date' => $this->faker->dateTimeInInterval('today', '+2 months'),
        ];
    }
}
