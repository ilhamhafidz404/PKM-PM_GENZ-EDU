<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::create([
            "question" => "Apa yang dimaksud dengan nilai religius ",
            "a" => "Kejujuran dalam berbagi situasi",
            "b" => "Kepatuhan terhadap",
            "c" => "fewws",
            "d" => "wws",
            "answer" => "s",
            "quiz_id" => 1
        ]);
    }
}
