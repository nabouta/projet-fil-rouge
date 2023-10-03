<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            "name" => "Moustapha Mbaye", "email" => "moustapha92@gmail.com",
            "password" => "tapha123", "roles" => "PedagogicalManager"
        ]);

        User::create([
            "name" => "Mar Ndiaye", "email" => "mar98@gmail.com",
            "password" => "mar123", "roles" => "Supervisor"
        ]);
        User::create([
            "name" => "Jean Malick Mendy", "email" => "jemmy99@gmail.com",
            "password" => "jemmy123", "roles" => "Professor"
        ]);
        User::create([
            "name" => "Khaoussou Diallo", "email" => "Khaoussou99@gmail.com",
            "password" => "diallo123", "roles" => "Professor"
        ]);
        User::create([
            "name" => "Bassirou Seye", "email" => "bassirou99@gmail.com",
            "password" => "seye123", "roles" => "Professor"
        ]);
    }
}
