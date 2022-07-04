<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeModule',
        'professeur_id',
        'semestre',
        'intitule',
        'niveaux_id',
    ];


    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function matiere()
    {
        return $this->hasMany(Matiere::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
}
