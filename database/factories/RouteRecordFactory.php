<?php

namespace Database\Factories;

use App\Enums\ClimbingType;
use App\Models\RouteRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RouteRecord>
 */
class RouteRecordFactory extends Factory
{
    protected $model = RouteRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'route_id' => $this->faker->randomDigitNotZero(),
            'user_id' => $this->faker->randomDigitNotZero(),
            'grade_id' => $this->faker->randomDigitNotZero(),
            'tries' => $this->faker->randomDigitNotZero(),
            'type' => ClimbingType::cases()[$this->faker->numberBetween(0,2)]->value,
            'rating' => $this->faker->numberBetween(0,5),
            'review' => $this->faker->sentence(),
        ];
    }
}
