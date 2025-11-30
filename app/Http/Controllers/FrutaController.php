<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutaController extends Controller
{
    public function index()
    {
        $frutas = ["Manzana", "Banana", "Naranja", "Pera", "Uva"];
        return view('frutas.index', compact('frutas'));
    }

    public function store(Request $request)
    {
        $fruta = $request->input('fruta');
        return view('frutas.resultado', compact('fruta'));
    }
}
