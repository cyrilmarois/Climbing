<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RouteRecord>
 */
class RouteRecordFactory extends Factory
{
    protected $model = RouteRecord::class;

    private const type = [
        'lead climbing',
        'top rope climbing'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'route_id' => $this->faker->randomDigit,
            'user_id' => $this->faker->randomDigit,
            'grade_id' => $this->faker->randomDigit,
            'tries' => $this->faker->randomDigit,
            'type' => self::type[$this->faker->numberBetween(0,1)],
            'rating' => $this->faker->numberBetween(0,5),
            'review' => $this->faker->sentence,
        ];
    }
}
