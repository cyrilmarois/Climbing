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
        collect(Grade::GRADES)->map(function (string $grade) {
            $data = ['name' => $grade];
            Grade::firstOrCreate($data, $data);
        });
    }
}
