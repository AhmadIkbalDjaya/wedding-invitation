<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Guest;
use App\Models\Message;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guest::create([
            "name" => "Fatih Djaya",
            "slug" => "fatih-djaya",
            "address"=> "Rachita",
            "information" => "ananya ummi dan babba",
        ]);
        Guest::create([
            "name" => "Azka Djaya",
            "slug" => "azka-djaya",
            "address"=> "Andi Caco",
            "information" => "adeknya jihang",
        ]);

        Message::create([
            "name" => "Fatih Djaya",
            "address" => "Rachita",
            "text" => "Bia bia bia",
            "guest_name" => "Fatih Djaya",
            "isCome" => "1",
            "isActive" => "1",
        ]);
        Message::create([
            "name" => "Azka Djaya",
            "address" => "Andi Caco",
            "text" => "Agangare cendra matanna",
            "guest_name" => "Azka Djaya",
            "isCome" => "0",
            "isActive" => "0",
        ]);

        User::create([
            "username" => "annaDjaya",
            "password" => "annaxdjaya",
        ]);
        
        User::create([
            "username" => "saraDjaya",
            "password" => "saraxdjaya",
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
