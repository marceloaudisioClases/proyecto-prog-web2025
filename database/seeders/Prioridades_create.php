<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prioridad;

class Prioridades_create extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prioridad::create(["nombre"=>"Alta"]);
        Prioridad::create(["nombre"=>"Media"]);
        Prioridad::create(["nombre"=>"Baja"]);
    }
}
