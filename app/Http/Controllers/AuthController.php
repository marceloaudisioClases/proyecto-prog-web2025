<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
    public function login(Request $request){
        return view("login.ingreso");
    }

    public function ingreso(Request $request){
        $request->validate([
            'usuario' => ['required','string'],
            'password' => ['required']
        ],[
            "usuario.required"=>"El usuario es requerido",
            "password.required"=>"La contraseña no puede estar vacía"
        ]);

        $credenciales = array(
            "name"=>$request->usuario,
            "password"=>$request->password
        );

        if (Auth::attempt($credenciales)) {
           $request->session()->regenerate();
           return redirect()->intended(route("principal"));
        }else{
            return redirect()->back()->withErrors("Credenciales Incorrectas");
        }
    }
}
