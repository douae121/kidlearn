<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ParentModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Méthode pour inscrire un utilisateur
    public function inscrire(Request $request)
    {
        try {
            $request->validate([
                'nom_de_parent' => 'required|string|max:255',
                'votre_email' => 'required|email|unique:parent_models,votre_email',
                'password' => 'required|min:6',
            ]);

            Log::info('Tentative d\'inscription', ['email' => $request->votre_email]);

            $user = ParentModel::create([
                'nom_de_parent' => $request->nom_de_parent,
                'votre_email' => $request->votre_email,
                'password' => Hash::make($request->password),
            ]);

            if (!$user) {
                throw new \Exception('Échec de la création de l\'utilisateur');
            }

            Auth::login($user);
            Log::info('Inscription réussie', ['email' => $request->votre_email]);
            
            return redirect()->intended(route('espace-enfants'))->with('success', 'Inscription réussie !');
        } catch (ValidationException $e) {
            Log::error('Erreur de validation', ['errors' => $e->errors()]);
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'inscription', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return back()->with('msg', 'Une erreur est survenue lors de l\'inscription: ' . $e->getMessage());
        }
    }

    // Méthode pour connecter un utilisateur
    public function connecter(Request $request)
    {
        $request->validate([
            'votre_email' => 'required|email',
            'password' => 'required',
        ]);

        Log::info('Tentative de connexion', ['email' => $request->votre_email]);

        $credentials = [
            'votre_email' => $request->votre_email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            Log::info('Connexion réussie', ['email' => $request->votre_email]);
            return redirect()->intended(route('espace-enfants'))->with('success', 'Connexion réussie !');
        }

        Log::warning('Échec de la connexion', ['email' => $request->votre_email]);
        return back()->with('msg', 'Email ou mot de passe incorrect.');
    }
}
