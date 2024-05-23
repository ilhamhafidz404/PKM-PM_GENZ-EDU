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
        User::insert([
            [
                "name" => "Ilham Hafidz",
                "nisn" => "20220810052",
                "profile" => "profile.jpg",
                "password" => bcrypt("password"),
            ],
            [
                "name" => "Gyan Fadli",
                "nisn" => "20220850098",
                "profile" => "profile.jpg",
                "password" => bcrypt("password"),
            ],
        ]);
    }
}
