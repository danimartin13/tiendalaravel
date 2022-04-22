<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
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
        $productonueva = new Usuario;
        $productonueva -> nombre = $request->nombre;
        $productonueva -> password = $request->password;
        $productonueva -> rol = 2;
        $productonueva -> save();
    }
}
