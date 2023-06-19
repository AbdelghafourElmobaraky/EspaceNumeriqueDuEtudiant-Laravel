<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    public function diplome()
    {
        return $this->belongsTo(Diplome::class, 'diplome', 'id_diplome');
    }

    public function filiere()
    {
        return $this->hasOne(Filiere::class, 'diplome_id', 'diplome');
    }

    
}
