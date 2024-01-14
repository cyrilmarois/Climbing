<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Club;
use App\Models\Grade;
use App\Models\Route;
use App\Models\RouteRecord;
use App\Models\User;
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
        $users = User::all()->random()->take(2);

        Route::factory()
            ->count(10)
            ->state(new Sequence(
                fn(Sequence $sequence) => [
                    'color_id' => Color::all()->random(),
                    'club_id' => Club::all()->random(),
                    'grade_id' => Grade::all()->random()
                ]))
            ->hasTags(5)
            ->hasUsers($users)
            ->hasAttached(
                User::factory()
                    ->count(5)
                    ->state(function (array $attributes, Route $route) use ($users){
                        return [
                            'route_id' => $route->id,
                            'user_id' => $users->first()->id,
                        ];
                    }), 'routeRecords')
            ->create();
    }
}
