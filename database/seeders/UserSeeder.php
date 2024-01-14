<?php

namespace Database\Seeders;

use App\Enums\Gender;
use App\Models\Club;
use App\Models\Country;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->has(
                UserProfile::factory()
                    ->count(1)
                    ->sequence(
                        ['gender' => Gender::MALE],
                        ['gender' => Gender::FEMALE]
                    )
                    ->state(function (array $attributes, User $user) {
                        return [
                            'nationality_country_id' => Country::factory()->create()->id,
                            'club_id' => Club::factory()->create()->id,
                            'user_id' => $user->id,
                        ];
                    }), 'profile')
            ->create();
    }
}
