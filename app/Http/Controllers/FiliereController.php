<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function store(Request $request)
        
    {
        
        $request ->validate([
        'id_filiere' => 'required',
        'filiere' => 'required',
        'abrv' => 'required',
        'diplome_id' => 'required'

        ], [ 
        'id_filiere.required' => 'required',
        'diplome_id.required' => 'required',
        'filiere.required' => 'le nom de filiere est obligatoire',
        'abrv.required' => 'Ce champ est obligatoire']
    );

    $filiere = new Filiere();

        $filiere->id_filiere = strip_tags($request->input('id_filiere'));
        $filiere->diplome_id = strip_tags($request->input('diplome_id'));
        $filiere->abrv = strip_tags($request->input('abrv'));
        $filiere->filiere = strip_tags($request->input('filiere'));

        
        
        
        $filiere->save();
        return redirect()->Route('Diplome.index');
}
}
