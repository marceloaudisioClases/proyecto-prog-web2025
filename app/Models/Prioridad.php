<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Prioridad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'nivel',
    ];

    /**
     * Relación: una Prioridad tiene muchos Tickets
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'prioridad_id');
    }
}
