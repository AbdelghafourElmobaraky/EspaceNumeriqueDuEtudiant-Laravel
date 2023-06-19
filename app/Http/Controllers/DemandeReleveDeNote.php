<?php

namespace App\Http\Controllers;

use App\Models\Demandereleve;
use App\Models\Diplome;
use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeReleveDeNote extends Controller
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user = Auth::user();
        $etudiant = Etudiant::join('users', 'etudiants.cne', '=', 'users.code_massar')
            ->where('etudiants.cne', $user->code_massar)
            ->select('etudiants.nom', 'etudiants.prenom')
            ->first();
    
        $diplome = Diplome::select('diplomes.diplome')
            ->join('etudiants', 'diplomes.id_diplome', '=', 'etudiants.diplome')
            ->where('etudiants.cne', $user->code_massar)
            ->first();

        $filiere = Filiere::select('filieres.filiere')
            ->join('diplomes', 'filieres.diplome_id', '=', 'diplomes.id_diplome')
            ->join('etudiants', 'diplomes.id_diplome', '=', 'etudiants.diplome')
            ->where('etudiants.cne', $user->code_massar)
            ->first();

        $demandereleve = Demandereleve::where('cne', $user->code_massar)->first();

        return view('etudiant.demande-releve',compact('user','etudiant','diplome','filiere','demandereleve'));
    }

    public function store(Request $request)
    {
        
        $demande = new Demandereleve();
        $demande->cne = $request->input('cne');
        $demande->nom = $request->input('nom');
        $demande->prenom = $request->input('prenom');
        $demande->diplome = $request->input('diplome');
        $demande->Filiere = $request->input('filiere');
        $demande->semestre = $request->input('semestre');
        $demande->annee = $request->input('annee');
        $demande->save();
    
        return redirect()->route('DemandeReleveDeNote.create')->with('success', 'Demande soumise avec succès.');
    }
    public function show()
    {
        $releve = Demandereleve::all();
        return view('admin.releve-note',compact('releve'));
    }

    public function markAsRead($id)
    {
        $demande = Demandereleve::find($id);
        if ($demande) {
            $demande->status = true; 
            $demande->save();
            return redirect()->route('DemandeReleveDeNote.show')->with('success', 'Demande marquée comme lue.');
        }
        return redirect()->route('DemandeReleveDeNote.show')->with('error', 'Demande introuvable.');
    }

    public function markAsSignee($id)
    {
        $demande = Demandereleve::find($id);
        if ($demande) {
            $demande->signee = true;
            $demande->save();
            return redirect()->route('DemandeReleveDeNote.show')->with('success', 'Demande marquée comme lue.');
        }
        return redirect()->route('DemandeReleveDeNote.show')->with('error', 'Demande introuvable.');
    }

    public function markAsTerminer($id)
    {
        $demande = Demandereleve::find($id);
        if ($demande) {
            $demande->terminer = true;
            $demande->save();
            $demande->delete();
            return redirect()->route('DemandeReleveDeNote.show')->with('success', 'Demande marquée comme refusée et supprimée.');
        }
        return redirect()->route('DemandeReleveDeNote.show')->with('error', 'Demande introuvable.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
