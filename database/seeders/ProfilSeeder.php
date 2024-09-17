<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now(); // Obtenir l'heure actuelle

        $profils = [
            ['identifiant' => 1, 'name' => 'bloqueur sol-air', 'image' => 'images/bloqueur_sol_air.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 2, 'name' => 'bloqueur air distributeur', 'image' => 'images/bloqueur_air_distributeur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 3, 'name' => 'bloqueur air ratisseur', 'image' => 'images/bloqueur_air_ratisseur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 4, 'name' => 'bloqueur sol ratisseur', 'image' => 'images/bloqueur_sol_ratisseur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 5, 'name' => 'bloqueur sol distributeur', 'image' => 'images/ratisseur_distributeur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 6, 'name' => 'ratisseur distributeur', 'image' => 'images/bloqueur_sol_distributeur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 7, 'name' => 'percuteur défensif', 'image' => 'images/percuteur_defensif.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 8, 'name' => 'distributeur percuteur', 'image' => 'images/distributeur_percuteur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 9, 'name' => 'tireur défensif', 'image' => 'images/tireur_defensif.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 10, 'name' => 'distributeur créateur', 'image' => 'images/distributeur_createur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 11, 'name' => 'percuteur créateur', 'image' => 'images/percuteur_createur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 12, 'name' => 'tireur percuteur', 'image' => 'images/tireur_percuteur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 13, 'name' => 'tireur créateur', 'image' => 'images/tireur_createur.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 14, 'name' => 'cible offensive tout terrain', 'image' => 'images/cible_offensive_tout_terrain.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['identifiant' => 15, 'name' => 'cible offensive tireur', 'image' => 'images/cible_offensive_tireur.jpg', 'created_at' => $now, 'updated_at' => $now],
        ];

        // Insérer les profils dans la table
        DB::table('profiles')->insert($profils);
    }
}
