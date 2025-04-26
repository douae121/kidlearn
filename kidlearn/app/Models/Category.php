<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'order',
        'active',
    ];

    /**
     * Les attributs qui doivent être castés en types natifs.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Obtenir les éléments d'apprentissage associés à cette catégorie.
     */
    public function learningItems()
    {
        return $this->hasMany(LearningItem::class);
    }
} 