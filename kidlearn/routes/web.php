<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearningController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LearningItemController;
use App\Http\Controllers\MathController;

/*
|--------------------------------------------------------------------------
| Routes Web
|--------------------------------------------------------------------------
*/

// Routes principales
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/acceuil', function () {
    return view('acceuil');
})->name('acceuil');

Route::get('/primaire', function () {
    return view('primaire');
})->name('primaire');

Route::get('/prescolaire', function () {
    return view('prescolaire.prescolaire');
})->name('prescolaire');

// Routes pour la section prescolaire
Route::prefix('prescolaire')->group(function () {
    Route::get('/categories', function () {
        return view('prescolaire.categories');
    })->name('prescolaire.categories');

    Route::get('/animaux', function () {
        return view('prescolaire.animaux');
    })->name('prescolaire.animaux');

    Route::get('/transport', function () {
        return view('prescolaire.transport');
    })->name('prescolaire.transport');

    Route::get('/couleurs', function () {
        return view('prescolaire.couleurs');
    })->name('prescolaire.couleurs');
});

// Routes pour la section primaire
Route::prefix('primaire')->group(function () {
    Route::get('/francais', function () {
        return view('primaire.francais');
    })->name('primaire.francais');

    Route::get('/maths', function () {
        return view('primaire.maths');
    })->name('primaire.maths');

    Route::get('/sciences', function () {
        return view('primaire.sciences');
    })->name('primaire.sciences');

    Route::get('/histoire', function () {
        return view('primaire.histoire');
    })->name('primaire.histoire');

    Route::get('/geographie', function () {
        return view('primaire.geographie');
    })->name('primaire.geographie');

    Route::get('/informatique', function () {
        return view('primaire.informatique');
    })->name('primaire.informatique');

    Route::get('/alphabets', function () {
        return view('primaire.alphabets');
    })->name('primaire.alphabets');

    Route::get('/couleurs', function () {
        return view('primaire.couleurs');
    })->name('primaire.couleurs');

    Route::get('/formes', function () {
        return view('primaire.formes');
    })->name('primaire.formes');

    Route::get('/chiffres', function () {
        return view('primaire.chiffres');
    })->name('primaire.chiffres');

    Route::get('/transport', function () {
        return view('moyens');
    })->name('primaire.transport');

    Route::get('/animaux', function () {
        return view('animaux');
    })->name('primaire.animaux');
});

// Routes publiques
Route::get('/games', [LearningController::class, 'games'])->name('games');
Route::get('/animaux', [LearningController::class, 'animals'])->name('animals');
Route::get('/moyens', [LearningController::class, 'transports'])->name('transports');
Route::get('/niveau1math', [LearningController::class, 'math1'])->name('math1');
Route::get('/quiz1math', [LearningController::class, 'quizMath'])->name('quizMath');
Route::get('/niveau2math', [LearningController::class, 'math2'])->name('math2');
Route::get('/quiz2math', [LearningController::class, 'quizMath2'])->name('quizMath2');
Route::get('/niveau3math', [LearningController::class, 'math3'])->name('math3');
Route::get('/quiz3math', [LearningController::class, 'quizMath3'])->name('quizMath3');
Route::get('/category/{slug}', [LearningController::class, 'category'])->name('category');
Route::get('/category/{categorySlug}/item/{itemId}', [LearningController::class, 'item'])->name('item');
Route::get('/math', [MathController::class, 'index'])->name('math.index');
Route::get('/math/level/{id}', [MathController::class, 'showLevel'])->name('math.level');
Route::get('/math/level/{level}/exercise/{exercise}', [MathController::class, 'showExercise'])->name('math.exercise');
Route::post('/math/exercise/{id}/check', [MathController::class, 'checkAnswer'])->name('math.check');



// Routes pour la partie admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Page de login admin
    Route::get('/login', function () {
        return view('admin.login');
    })->name('login');
    
    // Route de traitement du login
    Route::post('/login', function () {
        // À implémenter
    })->name('login.post');
    
    // Routes protégées par middleware d'authentification
    Route::middleware(['web'])->group(function () {
        // Dashboard
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');
        
        // Routes des catégories
        Route::resource('categories', CategoryController::class);
        
        // Routes des éléments d'apprentissage
        Route::resource('learning_items', LearningItemController::class);
    });
});