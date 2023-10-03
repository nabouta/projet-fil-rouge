<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call([
        SchoolYearSeeder::class,
        ModuleSeeder::class,
        ChainSeeder::class,
        LevelSeeder::class,
        ClassroomSeeder::class,
        SemesterSeeder::class,
        UserSeeder::class
      ]);
    }
}
