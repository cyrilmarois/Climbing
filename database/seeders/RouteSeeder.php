<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Route::factory()
            ->hasClub(1)
            ->hasUsers(2)
            ->hasTags(5)
            ->count(10)
            ->create();
    }
}
