<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Etudiant;

class LoginController extends Controller
{
  

    use AuthenticatesUsers;

    
    protected $redirectTo = RouteServiceProvider::HOME;

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /*------------------------- function two type  users ------------------------------------*/

    public function login(Request $request){
      
        $input = $request->all();
        $this->validate($request,[
           'email' => 'required|email',
           'password' => 'required'
        ]);
        
   
        if(auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'] ,  'confirmation_token' => null))){

            if(auth()->user()->isAdmin==1){

                return redirect()->route('Admin.index'); 

            } else{

                return redirect()->route('User.index');
             }
   
        }else{
            return redirect()->route('login')->with('error','E-mail ou mot de passe incorrect !');
        }
   
   
   
       }

}
