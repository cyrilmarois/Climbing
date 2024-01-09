<?php

namespace Database\Seeders;

use App\Models\Club;
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
            ->has(
                UserProfile::factory()
                    ->count(1)
                    ->forClub()
                    ->state(function (array $attributes, User $user) {
                        return [
                            'user_id' => $user->id,
                        ];
                    }), 'profile')
            ->create();
    }
}
