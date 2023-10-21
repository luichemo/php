<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    public function run()
{
    DB::table('quizzes')->insert([
        ['name' => 'Quiz 1', 'description' => 'Description for Quiz 1'],
        ['name' => 'Quiz 2', 'description' => 'Description for Quiz 2'],
        
    ]);
}
}
