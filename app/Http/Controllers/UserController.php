<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Stat;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function storeOrderPreference(Request $request)
    {
        // Valider l'entrée
        $validated = $request->validate([
            'order_preference' => 'required|string|in:desc,asc,random',
        ]);

        // Mettre à jour la préférence de l'utilisateur connecté
        $user = auth()->user();
        $user->order_preference = $validated['order_preference'];
        $user->save();

        // Rediriger vers la page d'accueil avec un message de succès
        return redirect()->route('accueil');
    }
}
