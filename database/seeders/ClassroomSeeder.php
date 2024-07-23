<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::insert([
            [
                "name" => "IX A",
                "slug" => "ix-a"
            ],
            [
                "name" => "IX B",
                "slug" => "ix-b"
            ],
            [
                "name" => "VIII",
                "slug" => "viii"
            ],
            [
                "name" => "VII",
                "slug" => "vii"
            ],
        ]);
    }
}
