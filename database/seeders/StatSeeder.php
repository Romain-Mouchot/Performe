<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stats')->insert([
            'player_id' => '3',
            'game_id' => '1',
            'points' => '21',
            'rebounds' => '7',
            'assists' => '3',
            'mins' => '34',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
