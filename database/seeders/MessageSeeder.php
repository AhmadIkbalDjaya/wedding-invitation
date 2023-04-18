<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
