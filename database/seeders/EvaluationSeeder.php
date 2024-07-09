<?php

namespace Database\Seeders;

use App\Models\Evaluation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Evaluation::insert([
            "user_id" => 1,
            "gotong_royong" => 100,
            "nasionalis" => 30,
            "religius" => 75,
            "mandiri" => 75,
            "integritas" => 80,
            "message" => "hello"
        ]);
    }
}
