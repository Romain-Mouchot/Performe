<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon; // Utilisation de Carbon pour obtenir l'horodatage actuel

class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now(); // Obtenir l'heure actuelle

        $domains = [
            [
                'name' => 'défense aerienne',
                'description' => 'Quand le ballon monte dans les airs, tu te sens comme un mur
                                infranchissable où il y a des ajustements à faire ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'défense au sol',
                'description' => 'Est-ce que tu te sens serein dans les un contre un au sol ou tu aimerais
                                encore affiner ton jeu défensif ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'récuperation',
                'description' => 'Est-ce que tu es le premier sur chaque ballon perdu ou tu penses qu’il te manque un peu de mordant ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'distribution',
                'description' => 'Tu te sens à l’aise pour organiser le jeu et relancer proprement ou tu
                                penses qu’il y a encore du boulot ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'percussion',
                'description' => 'Est-ce que tu arrives à casser les lignes par ta vitesse et tes dribbles
                                ou tu souhaites encore peaufiner cette arme ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'mise en danger',
                'description' => 'Quand tu es près de la surface, est-ce que tu as le flair pour créer des
                                occasions ou tu penses que tu pourrais être encore plus menaçant ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'finition',
                'description' => 'Est-ce que tu te sens comme un tueur devant le but ou il te manque encore
                                un peu de sang-froid pour faire la différence à chaque fois ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'name' => 'attaque aerienne',
                'description' => 'Les attaques aériennes, ça dit quoi ? Tu t’en sens capable ou c’est encore une notion sur laquelle tu souhaites progresser ?',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        // Insérer les domaines dans la table
        DB::table('domaines')->insert($domains);
    }
}
