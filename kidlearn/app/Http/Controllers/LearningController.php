<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\LearningItem;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    /**
     * Affiche la page d'accueil du site.
     */
    public function home()
    {
        $categories = Category::where('active', true)
            ->orderBy('order')
            ->take(4)
            ->get();
        
        return view('welcome', compact('categories'));
    }

    /**
     * Affiche la page des jeux.
     */
    public function games()
    {
        $categories = Category::where('active', true)
            ->orderBy('order')
            ->get();
        
        return view('games', compact('categories'));
    }

    /**
     * Affiche la page d'une catégorie spécifique.
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('active', true)
            ->firstOrFail();
        
        $items = $category->learningItems()
            ->where('active', true)
            ->orderBy('order')
            ->get();
        
        return view('category', compact('category', 'items'));
    }

    /**
     * Affiche la page d'un élément d'apprentissage spécifique.
     */
    public function item($categorySlug, $itemId)
    {
        $category = Category::where('slug', $categorySlug)
            ->where('active', true)
            ->firstOrFail();
        
        $item = $category->learningItems()
            ->where('id', $itemId)
            ->where('active', true)
            ->firstOrFail();
        
        return view('item', compact('category', 'item'));
    }

    /**
     * Affiche la page des animaux.
     */
    public function animals()
    {
        return view('animaux');
    }

    /**
     * Affiche la page des moyens de transport.
     */
    public function transports()
    {
        return view('moyens');
    }

    /**
     * Affiche la page de niveau 1 math.
     */
    public function math1()
    {
        return view('niveau1math');
    }

    /**
     * Affiche la page de quiz de mathématiques.
     */
    public function quizMath()
    {
        return view('quiz1math');
    }

    /**
     * Affiche la page de niveau 2 math.
     */
    public function math2()
    {
        return view('niveau2math');
    }

    /**
     * Affiche la page de quiz de mathématiques niveau 2.
     */
    public function quizMath2()
    {
        return view('quiz2math');
    }

    /**
     * Affiche la page de niveau 3 math.
     */
    public function math3()
    {
        return view('niveau3math');
    }

    /**
     * Affiche la page de quiz de mathématiques niveau 3.
     */
    public function quizMath3()
    {
        return view('quiz3math');
    }

    /**
     * Affiche la page du niveau 1 des lettres (A, B, C)
     */
    public function lettresNiveau1()
    {
        return view('lettres.niveau1');
    }

    /**
     * Affiche le quiz du niveau 1 des lettres
     */
    public function lettresQuiz1()
    {
        return view('lettres.quiz1');
    }

    /**
     * Affiche la page du niveau 2 des lettres (Prononciation A, B, C)
     */
    public function lettresNiveau2()
    {
        return view('lettres.niveau2');
    }

    /**
     * Affiche le quiz du niveau 2 des lettres
     */
    public function lettresQuiz2()
    {
        return view('lettres.quiz2');
    }

    /**
     * Affiche la page du niveau 3 des lettres (Association lettre-mot)
     */
    public function lettresNiveau3()
    {
        return view('lettres.niveau3');
    }

    /**
     * Affiche le quiz du niveau 3 des lettres
     */
    public function lettresQuiz3()
    {
        return view('lettres.quiz3');
    }

    /**
     * Affiche la page du niveau 4 des lettres (Tracé majuscules)
     */
    public function lettresNiveau4()
    {
        return view('lettres.niveau4');
    }

    /**
     * Affiche le quiz du niveau 4 des lettres
     */
    public function lettresQuiz4()
    {
        return view('lettres.quiz4');
    }

    /**
     * Affiche la page du niveau 5 des lettres (Tracé minuscules)
     */
    public function lettresNiveau5()
    {
        return view('lettres.niveau5');
    }

    /**
     * Affiche le quiz du niveau 5 des lettres
     */
    public function lettresQuiz5()
    {
        return view('lettres.quiz5');
    }

    /**
     * Affiche la page du niveau 6 des lettres (Ordre alphabétique A-F)
     */
    public function lettresNiveau6()
    {
        return view('lettres.niveau6');
    }

    /**
     * Affiche le quiz du niveau 6 des lettres
     */
    public function lettresQuiz6()
    {
        return view('lettres.quiz6');
    }

    /**
     * Affiche la page du niveau 7 des lettres (Reconnaissance dans les mots)
     */
    public function lettresNiveau7()
    {
        return view('lettres.niveau7');
    }

    /**
     * Affiche le quiz du niveau 7 des lettres
     */
    public function lettresQuiz7()
    {
        return view('lettres.quiz7');
    }

    /**
     * Affiche la page du niveau 8 des lettres (Association majuscule-minuscule)
     */
    public function lettresNiveau8()
    {
        return view('lettres.niveau8');
    }

    /**
     * Affiche le quiz du niveau 8 des lettres
     */
    public function lettresQuiz8()
    {
        return view('lettres.quiz8');
    }

    /**
     * Affiche la page du niveau 9 des lettres (Ordre alphabétique complet)
     */
    public function lettresNiveau9()
    {
        return view('lettres.niveau9');
    }

    /**
     * Affiche le quiz du niveau 9 des lettres
     */
    public function lettresQuiz9()
    {
        return view('lettres.quiz9');
    }

    /**
     * Affiche la page du niveau 10 des lettres (Lecture de mots simples)
     */
    public function lettresNiveau10()
    {
        return view('lettres.niveau10');
    }

    /**
     * Affiche le quiz du niveau 10 des lettres
     */
    public function lettresQuiz10()
    {
        return view('lettres.quiz10');
    }
} 