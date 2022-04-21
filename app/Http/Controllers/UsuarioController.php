<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function iniciosesion(){
        return view('iniciosesion');
    }

    public function registrarse(){
        return view('registrarse');
    }
    
    public function comprinicio(){
        return view('comprinicio');
    }

    public function compregis(Request $request){
        return view('compregis');
    }
}
