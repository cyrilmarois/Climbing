<?php

namespace Database\Factories;

use App\Enums\CompetitionType;
use App\Enums\ClimbingType;
use App\Models\Competition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    protected $model = Competition::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = $this->faker->date;
        $city = $this->faker->city;

        return [
            'title' => "{$city} - {$date}",
            'type' => CompetitionType::cases()[$this->faker->numberBetween(0, 1)]->value,
            'discipline' => ClimbingType::cases()[$this->faker->numberBetween(0, 1)]->value,
            'date' => $date,
            'city' => $city,
        ];
    }
}
