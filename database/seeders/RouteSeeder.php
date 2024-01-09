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
            ->count(10)
            ->hasClub(1)
            ->hasUsers(2)
            ->hasTags(5)
            ->create([
            'grade_id' => 1,
            'line_id' => 1,
            ]);
    }
}
