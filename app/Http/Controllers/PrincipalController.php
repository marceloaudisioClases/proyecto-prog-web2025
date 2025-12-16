<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class PrincipalController extends Controller
{
    public function index(){
        $tickets = Ticket::where('estado', 1)->get();
        return view("principal.index",compact("tickets"));
    }
}
