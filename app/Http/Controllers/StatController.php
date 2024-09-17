<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stat;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Récupérer les statistiques pour l'utilisateur connecté
        $stats = Stat::where('user_id', auth()->user()->id)->get();

        // Définir un tableau pour stocker les domaines avec leurs valeurs
        $domains = [
            'defense_aerienne' => 0,
            'defense_au_sol' => 0,
            'recuperation' => 0,
            'distribution' => 0,
            'percussion' => 0,
            'mise_en_danger' => 0,
            'finition' => 0,
            'attaque_aerienne' => 0,
        ];

        // Accumuler les valeurs pour chaque domaine uniquement pour cet utilisateur
        foreach ($stats as $stat) {
            foreach ($domains as $key => $value) {
                $domains[$key] += $stat->$key;
            }
        }

        switch ($request->order) {
            case 'asc':
                // Trier les domaines par valeur décroissante
                asort($domains);
                break;
            case 'desc':
                // Trier les domaines par valeur croissante
                arsort($domains);
                break;
            default:
                $keys = array_keys($domains);
                shuffle($keys);
                $domains = array_merge(array_flip($keys), $domains);
                break;
        }


        // Garder uniquement les 3 premiers éléments
        $topThree = array_slice($domains, 0, 3, true);
        $others = array_slice($domains, 3, 8, true);
        // dd($topThree, $others);

        // Retourner la vue avec les données
        return view('accueil', [
            'topThree' => $topThree,
            'others' => $others
        ]);

        // $stats = Stat::where('user_id', auth()->user()->id)->get();
        // return view('accueil', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stat = Stat::where('user_id', auth()->user()->id)->first();
        return view('profilage', compact('stat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'defense_aerienne' => 'required|integer',
            'defense_au_sol' => 'required|integer',
            'recuperation' => 'required|integer',
            'distribution' => 'required|integer',
            'percussion' => 'required|integer',
            'mise_en_danger' => 'required|integer',
            'finition' => 'required|integer',
            'attaque_aerienne' => 'required|integer',
        ]);

        // Rechercher la statistique existante pour l'utilisateur connecté
        $stat = Stat::where('user_id', auth()->user()->id)->first();

        if ($stat) {
            // Si la statistique existe, on la met à jour
            $stat->update($validated);
        } else {
            // Sinon, on la crée
            $validated['user_id'] = auth()->user()->id;
            $stat = Stat::create($validated);
        }

        // Déterminer le profil en fonction des statistiques
        $profileId = $this->determineProfile($stat);

        // Mettre à jour le profile_id de la stat avec le profil déterminé
        $stat->profile_id = $profileId;
        $stat->save();

        return redirect()->route('resultat');
    }

    /**
     * Détermine le profil en fonction des statistiques.
     */
    private function determineProfile($stat)
    {
        $profiles = [
            1 => ['defense_au_sol' => 0.5, 'defense_aerienne' => 0.5],
            2 => ['defense_aerienne' => 0.4, 'distribution' => 0.4],
            3 => ['defense_aerienne' => 0.45, 'recuperation' => 0.45],
            4 => ['defense_au_sol' => 0.45, 'recuperation' => 0.45],
            5 => ['defense_au_sol' => 0.4, 'distribution' => 0.4],
            6 => ['recuperation' => 0.5, 'distribution' => 0.5],
            7 => ['percussion' => 0.5, 'recuperation' => 0.13, 'defense_au_sol' => 0.13, 'defense_aerienne' => 0.13],
            8 => ['distribution' => 0.45, 'percussion' => 0.45],
            9 => ['finition' => 0.4, 'recuperation' => 0.1, 'distribution' => 0.1, 'defense_au_sol' => 0.1, 'defense_aerienne' => 0.1],
            10 => ['distribution' => 0.4, 'mise_en_danger' => 0.40],
            11 => ['percussion' => 0.5, 'mise_en_danger' => 0.5],
            12 => ['finition' => 0.45, 'percussion' => 0.45],
            13 => ['finition' => 0.5, 'mise_en_danger' => 0.5],
            14 => ['finition' => 0.4, 'distribution' => 0.1, 'percussion' => 0.1, 'mise_en_danger' => 0.1, 'attaque_aerienne' => 0.1],
            15 => ['finition' => 0.5, 'attaque_aerienne' => 0.5],
        ];

        $bestProfileId = null;
        $bestScore = -1;

        foreach ($profiles as $profileId => $weights) {
            $score = 0;
            foreach ($weights as $statName => $weight) {
                $score += $stat->{$statName} * $weight;
            }
            if ($score > $bestScore) {
                $bestScore = $score;
                $bestProfileId = $profileId;
            }
        }

        return $bestProfileId;
    }

    /**
     * Affiche le résultat avec le profil déterminé.
     */
    public function showResult()
    {
        $user = Auth::user();
        $stat = Stat::where('user_id', $user->id)->first();
        $profile = Profile::find($stat->profile_id);

        return view('resultat', compact('stat', 'profile'));
    }
}
