<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::insert([
            [
                "title" => "Matematika Berencana",
                "slug" => Str::slug("Matematika Berencana"),
                "teacher_id" => 1,
                "file" => "module.pdf",
                "created_at" => now()
            ], 
            [
                "title" => "Matematika Terapan",
                "slug" => Str::slug("Matematika Terapan"),
                "teacher_id" => 1,
                "file" => "module.pdf",
                "created_at" => now()
            ], 
        ]);
    }
}
