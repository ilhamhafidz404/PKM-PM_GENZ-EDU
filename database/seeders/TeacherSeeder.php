<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::insert([
            [
                "name" => "Teacher Demo",
                "username" => "teacher_demo",
                "email" => "teacherdemo@gmail.com",
                "password" => bcrypt("password")
            ],
            [
                "name" => "Lilis Saidah",
                "username" => "lilissaidah35",
                "email" => "lilissaidah35@gmail.com",
                "password" => bcrypt("12345671")
            ],
            [
                "name" => "Cecep Subagja",
                "username" => "cecepsubagja28",
                "email" => "cecepsubagja28@gmail.com",
                "password" => bcrypt("PS.cjs289")
            ],
            [
                "name" => "Rika Rahman",
                "username" => "rachman201280",
                "email" => "rachman201280@gmail.com",
                "password" => bcrypt("rikarahman201280")
            ],
            [
                "name" => "Risma Pujayanah",
                "username" => "rpujayanah",
                "email" => "rpujayanah@gmail.com",
                "password" => bcrypt("Risma2701")
            ],
            [
                "name" => "Eli Yuliati",
                "username" => "eliyuliati21",
                "email" => "eliyuliati21@gmail.com",
                "password" => bcrypt("eliyuliati1.")
            ],
            [
                "name" => "Etik Rohmatika",
                "username" => "etikrohmatikaa27",
                "email" => "etikrohmatikaa27@gmail.com",
                "password" => bcrypt("Abdithea@")
            ],
        ]);
    }
}
