<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Emploi_du_temp;
use App\Models\Filiere;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Emploi_Du_Temps extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diplomes = Diplome::all();
        $filieres = Filiere::all();
        $emplois_diplomes = Emploi_du_temp::join('diplomes', 'emploi_du_temps.diplome_id', '=', 'diplomes.id_diplome')
            ->join('filieres', 'diplomes.id_diplome', '=', 'filieres.diplome_id')
            ->select('diplomes.diplome', 'emploi_du_temps.*','filieres.filiere')
            ->get();
       
    
        return view('admin.emploi-du-temps', compact('diplomes', 'filieres', 'emplois_diplomes'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $emploi = new Emploi_du_temp();
        $emploi->diplome_id = $request->input('diplome_id');
        $emploi->filiere_id = $request->input('filiere_id');
        $emploi->lien = $request->input('lien');
        $emploi->save();

        return redirect()->route('EmploiDuTemp.index')->with('success', 'Creation avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       $user = Auth::user();
    $emploiDuTemps = Emploi_du_temp::all();


     return view('etudiant.emploi_du_temps',compact('emploiDuTemps'));
            

           
        
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
