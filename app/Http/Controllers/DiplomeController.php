<?php

namespace App\Http\Controllers;

use App\Models\Diplome;
use Illuminate\Http\Request;

class DiplomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diplomes = Diplome::all();
        return view('admin.diplome', compact('diplomes'));
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
        $request ->validate([
            'id_diplome' => 'required',
            'diplome' => 'required'
            
            
    
            ], [ 
            
            'id_diplome.required' => 'required',
            'diplome.required' => 'le nom de diplome est obligatoire']
            
        );
    
        $diplome = new Diplome();
    
            $diplome->id_diplome = strip_tags($request->input('id_diplome'));
            $diplome->diplome = strip_tags($request->input('diplome'));
            
            
            
            $diplome->save();
            return redirect()->Route('Diplome.index');
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
