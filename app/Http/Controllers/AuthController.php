<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view ('form');
    }

    public function postRegister(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        
        return view ('welcome', compact('firstname','lastname'));
    }

}
