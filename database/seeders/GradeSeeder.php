<?php

namespace Database\Seeders;

use App\Enums\Grade as GradeEnum;
use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grades = array_column(GradeEnum::cases(), 'values');
        collect($grades)->map(function (string $grade) {
            Grade::findOrCreate(['name' => $grade]);
        });
    }
}
