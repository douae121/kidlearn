<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningItem extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'image',
        'sound',
        'video',
        'age_min',
        'age_max',
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
        'age_min' => 'integer',
        'age_max' => 'integer',
    ];

    /**
     * Obtenir la catégorie à laquelle appartient cet élément d'apprentissage.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
} 