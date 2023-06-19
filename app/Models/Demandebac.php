<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandebac extends Model
{
    use HasFactory;
    protected $fillable = ['cne', 'nom', 'prenom','diplome', 'filiere', 'type', 'status','signee', 'terminer'];
}
