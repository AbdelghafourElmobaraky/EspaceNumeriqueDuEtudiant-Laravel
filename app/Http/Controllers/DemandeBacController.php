<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Demandebac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DemandeBacController extends Controller
{
    
    public function index()
    {
        
    }

   

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

        $demandebac = Demandebac::where('cne', $user->code_massar)->first();
    
        return view('etudiant.demande-bac', compact('user', 'etudiant', 'diplome','filiere','demandebac'));
    }
    

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'code_massar', 'cne');
    }

    
    public function store(Request $request)
    {
        
        $demande = new DemandeBac();
        $demande->cne = $request->input('cne');
        $demande->nom = $request->input('nom');
        $demande->prenom = $request->input('prenom');
        $demande->type = $request->input('type');
        $demande->diplome = $request->input('diplome');
        $demande->filiere = $request->input('filiere');
        $demande->save();
    
        return redirect()->route('DemandeBac.create')->with('success', 'Demande soumise avec succès.');
    }

    public function markAsRead($id)
    {
        $demande = Demandebac::find($id);
        if ($demande) {
            $demande->status = true; 
            $demande->save();
            return redirect()->route('DemandeBac.show')->with('success', 'Demande marquée comme lue.');
        }
        return redirect()->route('DemandeBac.show')->with('error', 'Demande introuvable.');
    }

    public function markAsSignee($id)
    {
        $demande = Demandebac::find($id);
        if ($demande) {
            $demande->signee = true;
            $demande->save();
            return redirect()->route('DemandeBac.show')->with('success', 'Demande marquée comme lue.');
        }
        return redirect()->route('DemandeBac.show')->with('error', 'Demande introuvable.');
    }

    public function markAsTerminer($id)
    {
        $demande = Demandebac::find($id);
        if ($demande) {
            $demande->terminer = true;
            $demande->save();
            $demande->delete();
            return redirect()->route('DemandeBac.show')->with('success', 'Demande marquée comme refusée et supprimée.');
        }
        return redirect()->route('DemandeBac.show')->with('error', 'Demande introuvable.');
    }

    
    public function show()
    {
        $bac = Demandebac::all(); 
        return view('admin.retrait-bac',compact('bac'));
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
