<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            "title"=> "Test Quiz",
            "slug"=> "test-quiz",
            "slug"=> "test-quiz",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa, quasi blanditiis cumque cupiditate doloremque aperiam aut, facilis tenetur numquam placeat unde quibusdam incidunt ex suscipit ratione. Repellat, dicta iure. Ea!",
            "category" => "nasionalis"
        ]);
    }
}
