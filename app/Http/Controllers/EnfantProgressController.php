<?php

namespace App\Http\Controllers;

use App\Models\EnfantProgress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnfantProgressController extends Controller
{
    public function index()
    {
        $progress = EnfantProgress::where('parent_id', Auth::id())
            ->orderBy('date_completion', 'desc')
            ->get();
            
        return view('enfants', compact('progress'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_enfant' => 'required|string|max:255',
            'activite' => 'required|string|max:255',
            'score' => 'required|integer|min:0|max:100',
            'commentaires' => 'nullable|string',
        ]);

        EnfantProgress::create([
            'parent_id' => Auth::id(),
            'nom_enfant' => $request->nom_enfant,
            'activite' => $request->activite,
            'score' => $request->score,
            'date_completion' => now(),
            'commentaires' => $request->commentaires,
        ]);

        return redirect()->route('espace-enfants')->with('success', 'Progrès enregistré avec succès !');
    }
} 