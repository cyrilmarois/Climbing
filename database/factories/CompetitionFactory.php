<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competition>
 */
class CompetitionFactory extends Factory
{
    protected $model = Competition::class;

    private const TYPE = [
        'world cups',
        'world championships'
    ];

    private const DISCIPLINE = [
        'lead climbing',
        'bouldering'
    ];

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
            'type' => self::TYPE[$this->faker->numberBetween(0, 1)],
            'discipline' => self::DISCIPLINE[$this->faker->numberBetween(0, 1)],
            'date' => $date,
            'city' => $city,
        ];
    }
}
