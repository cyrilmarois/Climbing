<?php

namespace Database\Factories;

use App\Enums\CompetitionType;
use App\Enums\ClimbingType;
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
        $types = CompetitionType::cases();
        $disciplines = ClimbingType::cases();

        return [
            'title' => "{$city} - {$date}",
            'type' => $types[$this->faker->numberBetween(0, 1)],
            'discipline' => $disciplines[$this->faker->numberBetween(0, 1)],
            'date' => $date,
            'city' => $city,
        ];
    }
}
