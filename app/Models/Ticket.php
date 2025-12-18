<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Prioridad;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'titulo',
        'descripcion',
        'prioridad_id',
        'estado',
    ];

    /**
     * Relación: un Ticket pertenece a una Prioridad
     */
    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class, 'prioridad_id');
    }
}
