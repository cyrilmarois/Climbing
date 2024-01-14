<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;
use App\Enums\Color as ColorEnum;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = array_column(ColorEnum::cases(), 'value');
        collect($colors)->map(function (string $color) {
            $data = ['name' => $color];
            Color::firstOrCreate($data, $data);
        });
    }
}
