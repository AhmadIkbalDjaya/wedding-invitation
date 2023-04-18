<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
