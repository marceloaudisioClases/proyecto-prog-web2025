<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AuthController extends Controller
{
    public function login(Request $request){
        return view("login.ingreso");
    }

    public function ingreso(Request $request){
        $request->validate([
            'name' => ['required','string'],
            'password' => ['required']
        ]);

        $credenciales = array(
            "name"=>$request->name,
            "password"=>$request->password,
        );

        if (Auth::attempt($credenciales)) {
           $request->session()->regenerate();
           return redirect("")->intended(route("principal"));
        }

    }
}
