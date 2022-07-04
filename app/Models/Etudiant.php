<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeApoge',
        'cne',
        'user_id',
        'niveaux_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveaux::class);
    }

    public function absence()
    {
        return $this->hasMany(Absence::class);
    }
}
