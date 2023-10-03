<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules=[
            ["wording"=>"Modelisation"],
            ["wording"=>"Javascript"],
            ["wording"=>"Algorithme"],
            ["wording"=>"Php"],
            ["wording"=>"Language C"],
            ["wording"=>"Angular"],
            ["wording"=>"Laravel"],
        ];
        Module::insert($modules);
    }
}
