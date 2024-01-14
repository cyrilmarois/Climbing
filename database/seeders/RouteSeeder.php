<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Club;
use App\Models\Grade;
use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
            ->state(new Sequence(
                fn(Sequence $sequence) => [
                    'grade_id' => Grade::all()->random(),
                     'color_id' => Color::all()->random(),
                     'club_id' => Club::all()->random(),
                    ]))
            ->hasTags(5)
            ->create();
    }
}
