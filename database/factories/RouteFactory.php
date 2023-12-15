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
            'grade_id' => $this->faker->name,
            'club_id' => $this->faker->name,
            'description' => $this->faker->sentence,
            'opening_date' => $this->faker->name,
            'closing_date' => $this->faker->name,
        ];
    }
}
