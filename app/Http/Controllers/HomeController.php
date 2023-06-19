<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
     {
        $user = Auth::user();
         return view('etudiant.index',compact('user'));
     }

    public function adminHome()
    {
        $user = Auth::user();
        return view('admin.index',compact('user'));
    }

    
}
