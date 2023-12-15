<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;
class ColorSeeder extends Seeder
{
    private const COLORS = [
        'White',
        'Yellow',
        'Orange',
        'Red',
        'Blue',
        'Green',
        'Black',
        'Purple',
        'Brown',
        'Pink',
        'Grey',
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(self::COLORS)->map(function (string $color) {
            Color::findOrCreate(['name' => $color]);
        });
    }
}
