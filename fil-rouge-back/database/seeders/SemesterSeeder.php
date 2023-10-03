<?php

namespace Database\Seeders;

use App\Models\SchoolYearSemester;
use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semesters = [
            ["wording" => "Semestre 1"],
            ["wording" => "Semestre 2"],
        ];
        $associations = [
            [
                "semester_id" => 1,
                "school_year_id" => 6
            ],
            [
                "semester_id" => 2,
                "school_year_id" => 6
            ]

        ];

        Semester::insert($semesters);
        SchoolYearSemester::insert($associations);
    }
}
