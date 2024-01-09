<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ->for(
                UserProfile::factory()
                    ->hasClub(1)
                    ->count(1)
                    ->state(function (array $attributes, User $user) {
                        return [
                            'user_id' => $user->id,
                        ];
                    }))
            ->hasRoutes(1)
            ->hasCompetitions(5)
            ->hasRouteRecords()
            ->create();
    }
}
