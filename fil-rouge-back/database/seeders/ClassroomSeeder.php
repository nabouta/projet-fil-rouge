<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms=[
            ["wording"=>"Albert Einstein","number_of_seats"=>50,"number"=>1],
            ["wording"=>"Mandela","number_of_seats"=>25,"number"=>2],
            ["wording"=>"Marie Cury","number_of_seats"=>30,"number"=>3],
        ];
        Classroom::insert($classrooms);
    }
}
