<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 21; $i++)
            DB::table('desk_lists')->insert([
                'name' => 'List ' . $i,
                'desk_id' => rand(1, 5),
            ]);
    }
}
