<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnfantProgress extends Model
{
    use HasFactory;

    protected $table = 'enfant_progress';
    
    protected $fillable = [
        'parent_id',
        'nom_enfant',
        'activite',
        'score',
        'date_completion',
        'commentaires'
    ];

    public function parent()
    {
        return $this->belongsTo(ParentModel::class);
    }
} 