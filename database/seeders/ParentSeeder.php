<?php

namespace Database\Seeders;

use App\Models\Parents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parents::insert([
            [
                "name" => "Azka Ainurridho",
                "username" => "xxkha",
                "email" => "azka@gmail.com",
                "password" => bcrypt("password"),
                "user_id" => 1,
            ],
            [
                "name" => "duka Ainurridho",
                "username" => "xxkha",
                "email" => "duka@gmail.com",
                "password" => bcrypt("password"),
                "user_id" => 2,
            ],
        ]);
    }
}
