<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    protected $fillable = ['id', 'nombre'];
    public function listar(){
       $categorias = Categoria::get();
        return view('categories',
        [
            'categorias'=>$categorias
        ]);
        //echo "Hola";
    }

    static function anadircategoria(Request $request){
        $categorianueva = new Categoria;
        $categorianueva ->nombre = $request->nombre;
        $categorianueva -> save();
    }

    static function eliminarcategoria($categoria){
        $categoria2 = Categoria::find($categoria);
        $categoria2->delete();
        return back();
    }
}
