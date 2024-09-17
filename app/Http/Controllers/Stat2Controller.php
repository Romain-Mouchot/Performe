<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stat;
use App\Models\Profile;
use App\Models\Domaine;
use App\Models\Entrainement;
use Illuminate\Support\Facades\Auth;

class Stat2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        // Récupérer la préférence de l'utilisateur
        $orderPreference = $user->order_preference;

        // Récupérer les statistiques pour l'utilisateur connecté
        $statsQuery = Stat::where('user_id', $user->id);

        // Appliquer le tri en fonction de la préférence de l'utilisateur
        if ($orderPreference === 'desc') {
            $statsQuery->orderByDesc('note'); // Trier par note décroissante
        } elseif ($orderPreference === 'asc') {
            $statsQuery->orderBy('note'); // Trier par note croissante
        } elseif ($orderPreference === 'random') {
            $statsQuery->inRandomOrder(); // Trier de manière aléatoire
        }

        // Exécuter la requête
        $stats = $statsQuery->get();

        $domains = Domaine::all()->keyBy('id');
        $trainingsCount = Entrainement::query()
            ->select('domaine_id', \DB::raw('count(*) as total'))
            ->groupBy('domaine_id')
            ->pluck('total', 'domaine_id');



        // Séparer les 3 meilleures notes des autres
        $topThree = $stats->take(3); // Les 3 premiers éléments
        $others = $stats->skip(3);   // Tous les éléments après les 3 premiers


        // Retourner la vue avec les statistiques et les domaines
        return view('accueil', [
            'topThree' => $topThree,
            'others' => $others,
            'domains' => $domains,
            'trainingsCount' => $trainingsCount,
        ]);
    }


    public function create()
    {
        $domaines = Domaine::all();
        $stats = Stat::where('user_id', auth()->user()->id)->get();
        
        return view('profilage', compact('domaines', 'stats'));
    }

    
    
    
    
    
    
    
     public function store(Request $request)
{
    // Récupérer les données du formulaire
    $data = $request->except('_token');

    // Afficher les données reçues pour vérification (optionnel)
    // dd($data);

    foreach ($data as $key => $value) {
        // Assurer que la clé est un entier valide (ID de domaine)
        if (is_numeric($key)) {
            Stat::updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'domaine_id' => (int) $key // Convertir la clé en entier
                ],
                [
                    'note' => (int) $value // Convertir la valeur en entier
                ]
            );
        }
    }

    $stats = Stat::where('user_id', auth()->user()->id)->get();

        // Déterminer le profil en fonction des statistiques
        $profileIdentifiant = $this->determineProfile($stats);

    // Récupérer le profil via son identifiant et mettre à jour l'utilisateur
    $profile = Profile::where('identifiant', $profileIdentifiant)->first();
    $user = Auth::user();
    $user->profile_id = $profile->id;
    $user->save();

    return redirect()->route('resultat');
}

    /**
     * Détermine le profil en fonction des statistiques.
     */
    private function determineProfile($stats)
{
    $profiles = [
        1 => ['défense au sol' => 0.5, 'défense aerienne' => 0.5],
        2 => ['défense aerienne' => 0.4, 'distribution' => 0.4],
        3 => ['défense aerienne' => 0.45, 'récuperation' => 0.45],
        4 => ['défense au sol' => 0.45, 'récuperation' => 0.45],
        5 => ['défense au sol' => 0.4, 'distribution' => 0.4],
        6 => ['récuperation' => 0.5, 'distribution' => 0.5],
        7 => ['percussion' => 0.5, 'récuperation' => 0.13, 'défense au sol' => 0.13, 'défense aerienne' => 0.13],
        8 => ['distribution' => 0.45, 'percussion' => 0.45],
        9 => ['finition' => 0.4, 'récuperation' => 0.1, 'distribution' => 0.1, 'défense au sol' => 0.1, 'défense aerienne' => 0.1],
        10 => ['distribution' => 0.4, 'mise en danger' => 0.40],
        11 => ['percussion' => 0.5, 'mise en danger' => 0.5],
        12 => ['finition' => 0.45, 'percussion' => 0.45],
        13 => ['finition' => 0.5, 'mise en danger' => 0.5],
        14 => ['finition' => 0.4, 'distribution' => 0.1, 'percussion' => 0.1, 'mise en danger' => 0.1, 'attaque aerienne' => 0.1],
        15 => ['finition' => 0.5, 'attaque aerienne' => 0.5],
    ];

    $bestProfileIdentifiant = null;
    $bestScore = -1;

    // Accumuler les notes pour chaque domaine_id
    $notes = [];
    foreach ($stats as $stat) {
        $notes[$stat->domaine->name] = $stat->note;
    }

    foreach ($profiles as $profileIdentifiant => $weights) {
        $score = 0;
        foreach ($weights as $domaineName => $weight) {
            $score += ($notes[$domaineName] ?? 0) * $weight;
        }
        if ($score > $bestScore) {
            $bestScore = $score;
            $bestProfileIdentifiant = $profileIdentifiant;
        }
    }

    return $bestProfileIdentifiant;
}


    public function showResult()
    {
        $user = Auth::user();
        $profile = Profile::find($user->profile_id);

        return view('resultat', compact('user', 'profile'));
    }
}
