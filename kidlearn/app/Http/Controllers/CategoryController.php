<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Afficher une liste des catégories.
     */
    public function index()
    {
        $categories = Category::orderBy('order')->get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Afficher le formulaire de création d'une nouvelle catégorie.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Stocker une nouvelle catégorie dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'order' => 'nullable|integer',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Catégorie créée avec succès.');
    }

    /**
     * Afficher une catégorie spécifique.
     */
    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    /**
     * Afficher le formulaire de modification d'une catégorie.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Mettre à jour la catégorie spécifiée dans la base de données.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'order' => 'nullable|integer',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }
            $data['image'] = $request->file('image')->store('categories', 'public');
        }

        $category->update($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Supprimer la catégorie spécifiée de la base de données.
     */
    public function destroy(Category $category)
    {
        // Supprimer l'image si elle existe
        if ($category->image) {
            Storage::disk('public')->delete($category->image);
        }
        
        $category->delete();

        return redirect()->route('admin.categories.index')
            ->with('success', 'Catégorie supprimée avec succès.');
    }
} 