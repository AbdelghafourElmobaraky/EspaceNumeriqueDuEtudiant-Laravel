<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function show()
    {
            $user = Auth::user();
            return view('etudiant.convention')->with('user', $user);
    }




    public function pdf()
    {
       
        $user = Auth::user();
        
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('etudiant.convention-pdf', compact('user'));

        return $pdf->stream($user->nom . '_' . $user->prenom . '.pdf');
    }

    
    
   

}
