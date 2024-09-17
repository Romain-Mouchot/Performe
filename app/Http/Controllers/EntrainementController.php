<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domaine;
use App\Models\Entrainement;

class EntrainementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $domaines = Domaine::all();
        return view('create', compact('domaines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'domaine_id' => 'required|exists:domaines,id',
        'title' => 'required|string|max:255',
        'link' => 'required|url',
        'durée' => 'required|string',
        'difficulte' => 'required|string',

        ]);

        $entrainement = Entrainement::create($validated);

        return redirect()->route('accueil', $entrainement);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $domaine = Domaine::findOrFail($id);
        $entrainements = Entrainement::where('domaine_id', $id)->get();

        return view('domaine', compact('domaine', 'entrainements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrainement $entrainement)
    {
        $domaines = Domaine::all();
        return view('edit', compact('entrainement','domaines'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrainement $entrainement)
    {
        $entrainement->update($request->all());
        return redirect()->route('domaine.show', ['id' => $entrainement->domaine_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrainement $entrainement)
    {
        $entrainement->delete();
        return redirect()->route('domaine.show', ['id' => $entrainement->domaine_id]);
    }










    public function play($id)
{
    // Trouver l'entraînement via son ID
    $entrainement = Entrainement::findOrFail($id);

    // Récupérer le domaine lié à l'entraînement
    $domaine = Domaine::findOrFail($entrainement->domaine_id);

    // Passer les deux variables à la vue
    return view('video', ['entrainement' => $entrainement, 'domaine' => $domaine]);
}
}
