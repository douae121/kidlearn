<?php

namespace App\Http\Controllers;

use App\Models\EnfantActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnfantActivityController extends Controller
{
    public function index()
    {
        // Récupérer les enfants et leurs activités
        $enfants = EnfantActivity::where('parent_id', Auth::id())
            ->select('nom_enfant')
            ->distinct()
            ->get()
            ->map(function($enfant) {
                $enfant->activities = EnfantActivity::where('parent_id', Auth::id())
                    ->where('nom_enfant', $enfant->nom_enfant)
                    ->orderBy('derniere_activite', 'desc')
                    ->get();
                return $enfant;
            });
            
        return view('enfants', compact('enfants'));
    }

    public function updateActivity(Request $request)
    {
        $request->validate([
            'nom_enfant' => 'required|string',
            'type_activite' => 'required|string',
            'niveau' => 'required|string',
            'score' => 'required|integer|min:0|max:100',
            'temps_passe' => 'required|integer|min:0',
        ]);

        $activity = EnfantActivity::updateOrCreate(
            [
                'parent_id' => Auth::id(),
                'nom_enfant' => $request->nom_enfant,
                'type_activite' => $request->type_activite,
            ],
            [
                'niveau' => $request->niveau,
                'score' => $request->score,
                'derniere_activite' => now(),
                'temps_passe' => $request->temps_passe,
                'exercices_completes' => \DB::raw('exercices_completes + 1'),
            ]
        );

        return response()->json(['success' => true]);
    }
} 