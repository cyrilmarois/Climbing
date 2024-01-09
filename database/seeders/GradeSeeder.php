<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    private const GRADES = [
        '1A',
        '1A+',
        '1B',
        '1B+',
        '1C',
        '1C+',
        '2A',
        '2A+',
        '2B',
        '2B+',
        '2C',
        '2C+',
        '3A',
        '3A+',
        '3B',
        '3B+',
        '3C',
        '3C+',
        '4A',
        '4A+',
        '4B',
        '4B+',
        '4C',
        '4C+',
        '5A',
        '5A+',
        '5B',
        '5B+',
        '5C',
        '5C+',
        '6A',
        '6A+',
        '6B',
        '6B+',
        '6C',
        '6C+',
        '7A',
        '7A+',
        '7B',
        '7B+',
        '7C',
        '7C+',
        '8A',
        '8A+',
        '8B',
        '8B+',
        '8C',
        '8C+',
        '9A',
        '9A+',
        '9B',
        '9B+',
        '9C',
        '9C+',
    ];


    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        collect(self::GRADES)->map(function (string $grade) {
            Grade::findOrCreate(['name' => $grade]);
        });
    }
}
