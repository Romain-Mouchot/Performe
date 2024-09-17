<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Halima',
            'email' => 'halima.boumaaza07@gmail.com',
            'password' => Hash::make('performe*halima07'), // Assure-toi de mettre un mot de passe sécurisé
            'role' => 'admin', // Assigne le rôle 'admin'
        ]);
    }
}
