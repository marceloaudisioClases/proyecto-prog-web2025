<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prioridad;

class PrioridadesController extends Controller
{
    public function prioridades(){
        $prioridades = Prioridad::orderBy("id", "desc")->get();

        return view("prioridades.prioridades", compact("prioridades"));
    }

   

    public function mostrar(request $request){
        $prioridades = Prioridad::all();

         return view("prioridades.mostrarprioridad", compact("prioridades"));
    }
    protected function nuevaprioridad(Request $request){
         $request->validate([
            "nombre"=> "required"
        ],[
            "nombre.required"=> "El nombre es obligatoria",     
        ]);
        $nuevo= array("nombre"=> $request->nombre,);
        Prioridad::create($nuevo); 
        return redirect()->route("prioridades.edit")->with("success","Prioridad guardada!");
    }
}
