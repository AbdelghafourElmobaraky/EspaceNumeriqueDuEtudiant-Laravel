<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profilecontroller extends Controller
{
    public function profileAdmin(){
        $user = Auth::user();
        $etudiant = Etudiant::join('users', 'etudiants.cne', '=', 'users.code_massar')
        ->where('etudiants.cne', $user->code_massar)
        ->select('etudiants.*')
        ->first();
        return view('admin.profile')->with('user',$user)->with('etudiant',$etudiant);
    }

    public function profileUser(){
        $user = Auth::user();
        $etudiant = Etudiant::join('users', 'etudiants.cne', '=', 'users.code_massar')
        ->where('etudiants.cne', $user->code_massar)
        ->select('etudiants.*')
        ->first();
        
        return view('etudiant.profile')->with('user',$user)->with('etudiant',$etudiant);
    }


    public function updateUser(Request $request, string $id)
    {
        $info = User::find($id);
    
        $request->validate([
            'code_massar' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'profile_img' => ['image','mimes:jpeg,png,jpg,gif,svg','max:2048']
        ]);

        $image= time().'.'. $request->profile_img->extension();
        $request->profile_img->storeAs('profil_images',$image, 'public');

        $info->profile_img =  $image;
        $info->code_massar = strip_tags($request->input('code_massar'));
        $info->nom = strip_tags($request->input('nom'));
        $info->prenom = strip_tags($request->input('prenom'));
        $info->email = strip_tags($request->input('email'));
        
        $info->save();

        return redirect()->Route('profileUser');
    }

   //-----------------------------------------------------------------------------------


   public function editinfo(string $id)
     {
        
        $info = User::find($id);

        
        return view('etudiant.parametre', compact('info'));
    }

    public function editinfoAdmin(string $id)
    {
       
       $info = User::find($id);

       
       return view('admin.parametre', compact('info'));
   }
}
