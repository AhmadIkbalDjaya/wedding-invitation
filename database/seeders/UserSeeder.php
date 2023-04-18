<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "username" => "ibu",
            "password" => bcrypt("anaknenek"),
        ]);

        User::create([
            "username" => "ikramDjaya",
            "password" => bcrypt("ikramxdjaya"),
        ]);

        User::create([
            "username" => "annaDjaya",
            "password" => bcrypt("annaxdjaya"),
        ]);
        
        User::create([
            "username" => "saraDjaya",
            "password" => bcrypt("saraxdjaya"),
        ]);
        
        User::create([
            "username" => "iroxDjaya",
            "password" => bcrypt("iroxxdjaya"),
        ]);

        User::create([
            "username" => "IkbalDjaya",
            "password" => bcrypt("ikbalxdjaya"),
        ]);
    }
}
