<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $etudiants = Etudiant::select('etudiants.*', 'diplomes.diplome', 'filieres.filiere')
        ->join('diplomes', 'etudiants.diplome', '=', 'diplomes.id_diplome')
        ->join('filieres', 'filieres.diplome_id', '=', 'diplomes.id_diplome')
        ->where('diplomes.diplome', 'Master')
        ->get();
        $inscriptions = Inscription::pluck('cne')->toArray();

    return view('admin.master', compact('etudiants', 'inscriptions'));
}

    
    
     

public function index1()
{
    $etudiants = Etudiant::select('etudiants.*', 'diplomes.diplome', 'filieres.filiere')
        ->join('diplomes', 'etudiants.diplome', '=', 'diplomes.id_diplome')
        ->join('filieres', 'filieres.diplome_id', '=', 'diplomes.id_diplome')
        ->where('diplomes.diplome', 'Licence')
        ->get();

    $inscriptions = Inscription::pluck('cne')->toArray();

    return view('admin.licence', compact('etudiants', 'inscriptions'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('admin.master', compact('etudiant'));
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
