<?php

namespace App\Http\Controllers;

use App\Models\MathLevel;
use App\Models\MathExercise;
use Illuminate\Http\Request;

class MathController extends Controller
{
    public function index()
    {
        $levels = MathLevel::orderBy('level_number')->get();
        return view('math.index', compact('levels'));
    }

    public function showLevel($id)
    {
        $level = MathLevel::with('exercises')->findOrFail($id);
        return view('math.level', compact('level'));
    }

    public function showExercise($levelId, $exerciseId)
    {
        $exercise = MathExercise::where('math_level_id', $levelId)
            ->where('id', $exerciseId)
            ->firstOrFail();
        return view('math.exercise', compact('exercise'));
    }

    public function checkAnswer(Request $request, $exerciseId)
    {
        $exercise = MathExercise::findOrFail($exerciseId);
        $isCorrect = $request->answer == $exercise->correct_answer;
        
        if ($isCorrect) {
            $exercise->update(['is_completed' => true]);
        }

        return response()->json([
            'correct' => $isCorrect,
            'message' => $isCorrect ? 'Bravo ! C\'est correct !' : 'Essayez encore !'
        ]);
    }
}
