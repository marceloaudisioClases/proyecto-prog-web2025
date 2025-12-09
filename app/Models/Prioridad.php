<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    protected $table = "prioridades";
    protected $fillable = ["nombre","estado"];

    public function Ticket(){
        return $this->hasMany(Ticket::class);
    }
}