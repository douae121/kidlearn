<?php

namespace App\Http\Controllers;

use App\Models\LearningItem;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LearningItemController extends Controller
{
    /**
     * Afficher une liste des éléments d'apprentissage.
     */
    public function index()
    {
        $learningItems = LearningItem::with('category')->orderBy('order')->get();
        return view('admin.learning_items.index', compact('learningItems'));
    }

    /**
     * Afficher le formulaire de création d'un nouvel élément.
     */
    public function create()
    {
        $categories = Category::where('active', true)->orderBy('name')->get();
        return view('admin.learning_items.create', compact('categories'));
    }

    /**
     * Stocker un nouvel élément dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'sound' => 'nullable|file|mimes:mp3,wav|max:5120',
            'video' => 'nullable|file|mimes:mp4,mov,ogg|max:20480',
            'age_min' => 'nullable|integer|min:0',
            'age_max' => 'nullable|integer|min:0',
            'order' => 'nullable|integer',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('learning_items/images', 'public');
        }
        
        if ($request->hasFile('sound')) {
            $data['sound'] = $request->file('sound')->store('learning_items/sounds', 'public');
        }
        
        if ($request->hasFile('video')) {
            $data['video'] = $request->file('video')->store('learning_items/videos', 'public');
        }

        LearningItem::create($data);

        return redirect()->route('admin.learning_items.index')
            ->with('success', 'Élément d\'apprentissage créé avec succès.');
    }

    /**
     * Afficher un élément spécifique.
     */
    public function show(LearningItem $learningItem)
    {
        return view('admin.learning_items.show', compact('learningItem'));
    }

    /**
     * Afficher le formulaire de modification d'un élément.
     */
    public function edit(LearningItem $learningItem)
    {
        $categories = Category::where('active', true)->orderBy('name')->get();
        return view('admin.learning_items.edit', compact('learningItem', 'categories'));
    }

    /**
     * Mettre à jour l'élément spécifié dans la base de données.
     */
    public function update(Request $request, LearningItem $learningItem)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'sound' => 'nullable|file|mimes:mp3,wav|max:5120',
            'video' => 'nullable|file|mimes:mp4,mov,ogg|max:20480',
            'age_min' => 'nullable|integer|min:0',
            'age_max' => 'nullable|integer|min:0',
            'order' => 'nullable|integer',
            'active' => 'nullable|boolean',
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            if ($learningItem->image) {
                Storage::disk('public')->delete($learningItem->image);
            }
            $data['image'] = $request->file('image')->store('learning_items/images', 'public');
        }
        
        if ($request->hasFile('sound')) {
            if ($learningItem->sound) {
                Storage::disk('public')->delete($learningItem->sound);
            }
            $data['sound'] = $request->file('sound')->store('learning_items/sounds', 'public');
        }
        
        if ($request->hasFile('video')) {
            if ($learningItem->video) {
                Storage::disk('public')->delete($learningItem->video);
            }
            $data['video'] = $request->file('video')->store('learning_items/videos', 'public');
        }

        $learningItem->update($data);

        return redirect()->route('admin.learning_items.index')
            ->with('success', 'Élément d\'apprentissage mis à jour avec succès.');
    }

    /**
     * Supprimer l'élément spécifié de la base de données.
     */
    public function destroy(LearningItem $learningItem)
    {
        // Supprimer les fichiers si ils existent
        if ($learningItem->image) {
            Storage::disk('public')->delete($learningItem->image);
        }
        
        if ($learningItem->sound) {
            Storage::disk('public')->delete($learningItem->sound);
        }
        
        if ($learningItem->video) {
            Storage::disk('public')->delete($learningItem->video);
        }
        
        $learningItem->delete();

        return redirect()->route('admin.learning_items.index')
            ->with('success', 'Élément d\'apprentissage supprimé avec succès.');
    }
} 