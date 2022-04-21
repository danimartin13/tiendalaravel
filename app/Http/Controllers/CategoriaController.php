<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;

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
    public function listarProductos($categoria){
        $cat = Categoria::where('nombre','=',$categoria)->get();
        $productos = Producto::where('id_categoria','=',$cat[0]->id)->get();
        return view('categoria',compact('productos'));
    }
}
