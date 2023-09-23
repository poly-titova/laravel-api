<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 101; $i++)
            DB::table('tasks')->insert([
                'name' => 'Task ' . $i,
                'card_id' => rand(1, 100),
            ]);
    }
}
