<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $levels=[
       [ "wording"=>"Licence 1"],
       [ "wording"=>"Licence 2"],
       [ "wording"=>"Licence 3"]
       ];
       Level::insert($levels);
    }
}
