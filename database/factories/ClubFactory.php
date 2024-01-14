<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Club>
 */
class ClubFactory extends Factory
{
    protected $model = Club::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city = $this->faker->city;
        return [
            'name' => "Climbing Club {$city}",
            'city' => $city,
            'zipcode' => $this->faker->postcode,
            'creation_date' => $this->faker->date()
        ];
    }
}
