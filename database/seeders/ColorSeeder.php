<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;
use app\Enums\Color as ColorEnum;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = array_column(ColorEnum::cases(), 'values');
        collect($colors)->map(function (string $color) {
            Color::findOrCreate(['name' => $color]);
        });
    }
}
