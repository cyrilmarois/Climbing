<?php

namespace Database\Factories;

use App\Enums\Gender;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserProfileFactory extends Factory
{
    protected $model = UserProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;
        $genders = Gender::cases();
        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'full_name' => "{$firstName} {$lastName}",
            'nationality_country_id' => $this->faker->randomNumber(),
            'gender' => $genders[$this->faker->numberBetween(0, 1)],
            'birth_date' => $this->faker->date,
            'height' => $this->faker->numberBetween(140, 210),
            'avatar' => $this->faker->image(),
            'description' => $this->faker->sentences(3, true),
            'club_id' => $this->faker->randomNumber(),
            'user_id' => $this->faker->randomNumber(),
        ];
    }
}
