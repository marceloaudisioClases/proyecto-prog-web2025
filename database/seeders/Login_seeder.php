<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Login_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  User::create( 
            ["name"=>"admin",
            "email"=>"admin@gmail",
            "password"=>Hash::make("123")]   
        );
    }
}
