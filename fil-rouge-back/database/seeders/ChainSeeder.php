<?php

namespace Database\Seeders;

use App\Models\Chain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chains=[
            ["wording"=>"Developpement Web"],
            ["wording"=>"Developpement Data"],
            ["wording"=>"Reference Digital"],
        ];

        Chain::insert($chains);
    }
}
