<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Http\Request;
use App\Models\Inscription;
use Illuminate\Support\Facades\Auth;
class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $diplome = Diplome::select('diplomes.diplome')
        ->join('etudiants', 'diplomes.id_diplome', '=', 'etudiants.diplome')
        ->where('etudiants.cne', $user->code_massar)
        ->first();

        $filiere = Filiere::select('filieres.filiere')
        ->join('diplomes', 'filieres.diplome_id', '=', 'diplomes.id_diplome')
        ->join('etudiants', 'diplomes.id_diplome', '=', 'etudiants.diplome')
        ->where('etudiants.cne', $user->code_massar)
        ->first();
       return view('etudiant.inscription',compact('diplome','filiere'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'cne' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'cin' => 'required',
            'nom_ar' => 'required',
            'prenom_ar' => 'required',
            'date_de_naissance' => 'required',
            'lieu_de_naissance' => 'required',
            'code_pays' => 'required',
            'adresse' => 'required',
            'telephone' => 'required|max:10',
            'email' => 'required',
            'id_diplome' => 'required',
            'id_filiere' => 'required',
            'semestre' => 'required'  
        ]);

        $etudiant = new Inscription();

        $etudiant->cne = strip_tags($request->input('cne'));
        $etudiant->nom = strip_tags($request->input('nom'));
        $etudiant->prenom = strip_tags($request->input('prenom'));
        $etudiant->cin = strip_tags($request->input('cin'));
        $etudiant->nom_ar = strip_tags($request->input('nom_ar'));
        $etudiant->prenom_ar = strip_tags($request->input('prenom_ar'));
        $etudiant->date_de_naissance = strip_tags($request->input('date_de_naissance'));
        $etudiant->lieu_de_naissance = strip_tags($request->input('lieu_de_naissance'));
        $etudiant->code_pays = strip_tags($request->input('code_pays'));
        $etudiant->adresse = strip_tags($request->input('adresse'));
        $etudiant->telephone = strip_tags($request->input('telephone'));
        $etudiant->email = strip_tags($request->input('email'));
        $etudiant->id_diplome = strip_tags($request->input('id_diplome'));
        $etudiant->id_filiere = strip_tags($request->input('id_filiere'));
        $etudiant->semestre = strip_tags($request->input('semestre'));

         
        $inscription = Etudiant::join('inscriptions', 'etudiants.cne', '=', 'inscriptions.cne')
            ->where('etudiants.cne', $etudiant->cne)
            ->first();

    if ($inscription) {
        $inscription->inscre = 1;
        $inscription->save();
    }
    
        $etudiant->save();

        return redirect()->Route('Inscription.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiants = Inscription::find($id);
        return view('etudiant.edit-info', compact('etudiants'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etudiant = Inscription::find($id);
    
        $request->validate([
            'cne' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'cin' => 'required',
            'nom_ar' => 'required',
            'prenom_ar' => 'required',
            'date_de_naissance' => 'required',
            'lieu_de_naissance' => 'required',
            'code_pays' => 'required',
            'adresse' => 'required',
            'telephone' => 'required|max:10',
            'email' => 'required',
            'id_diplome' => 'required',
            'id_filiere' => 'required',
            'semestre' => 'required'  
        ]);

        $etudiant->cne = strip_tags($request->input('cne'));
        $etudiant->nom = strip_tags($request->input('nom'));
        $etudiant->prenom = strip_tags($request->input('prenom'));
        $etudiant->cin = strip_tags($request->input('cin'));
        $etudiant->nom_ar = strip_tags($request->input('nom_ar'));
        $etudiant->prenom_ar = strip_tags($request->input('prenom_ar'));
        $etudiant->date_de_naissance = strip_tags($request->input('date_de_naissance'));
        $etudiant->lieu_de_naissance = strip_tags($request->input('lieu_de_naissance'));
        $etudiant->code_pays = strip_tags($request->input('code_pays'));
        $etudiant->adresse = strip_tags($request->input('adresse'));
        $etudiant->telephone = strip_tags($request->input('telephone'));
        $etudiant->email = strip_tags($request->input('email'));
        $etudiant->id_diplome = strip_tags($request->input('id_diplome'));
        $etudiant->id_filiere = strip_tags($request->input('id_filiere'));
        $etudiant->semestre = strip_tags($request->input('semestre'));
        
    
        $etudiant->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pdf($id)
    {
       
        $user = Auth::user();
        
        $etudiants = Inscription::find($id);
        
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('etudiant.inscription-pdf', compact('user','etudiants'));
       

        return $pdf->stream($user->nom . '_' . $user->prenom . '.pdf');
    }
}
