<?php

namespace Database\Seeders;

use App\Models\SchoolYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $years = [
            ["wording" => "2017-2018","state"=>0],
            ["wording" => "2018-2019","state"=>0],
            ["wording" => "2019-2020","state"=>0],
            ["wording" => "2021-2022","state"=>0],
            ["wording" => "2022-2023","state"=>0],
            ["wording" => "2023-2024","state"=>1]
        ];
       SchoolYear::insert($years);

    }
}
