<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show1()
    {
        return view('auth.login');
    }
    public function show2()
    {
        return view('auth.register');
    }
}
