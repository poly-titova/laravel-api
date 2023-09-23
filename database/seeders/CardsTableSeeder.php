<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 101; $i++)
        DB::table('cards')->insert([
            'name' => 'Card ' . $i,
            'desk_list_id' => rand(1, 20),
        ]);
    }
}
