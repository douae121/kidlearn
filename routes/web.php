<?php
use App\Models\ParentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnfantActivityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription.form');

Route::post('/inscription', [AuthController::class, 'inscrire'])->name('inscription');
Route::post('/connexion', [AuthController::class, 'connecter'])->name('connexion');

Route::middleware(['auth'])->group(function () {
    Route::get('/espace-enfants', [EnfantActivityController::class, 'index'])->name('espace-enfants');
    Route::post('/enfant/activity/update', [EnfantActivityController::class, 'updateActivity'])->name('enfant.activity.update');
});

Route::get('/enfant', function () {
    return view('acceuil');
})->name('enfant');

Route::get('/acceuil', function () {
    return view('acceuil');
})->name('acceuil');