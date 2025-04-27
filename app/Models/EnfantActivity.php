<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnfantActivity extends Model
{
    use HasFactory;

    protected $table = 'enfant_activities';
    
    protected $fillable = [
        'parent_id',
        'nom_enfant',
        'type_activite',
        'niveau',
        'score',
        'derniere_activite',
        'temps_passe',
        'exercices_completes'
    ];

    public function parent()
    {
        return $this->belongsTo(ParentModel::class);
    }
} 