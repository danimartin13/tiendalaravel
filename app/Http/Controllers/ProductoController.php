<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    protected $fillable = ['id', 'stock', 'foto', 'nombre', 'descripcion', 'id_categoria'];
    public function listar(){
       $productos = Producto::get();
       $categorias = Categoria::get();
        return view('productes',
        [
            'productos'=>$productos,
            'categorias'=>$categorias
        ]);
        //echo "Hola";
    }
    static function anadirproducto(Request $request){
        
        
        if (is_uploaded_file($_FILES['foto']['tmp_name'])){
            $productonueva = new Producto;
            $productonueva ->stock = $request->stock;
            $productonueva ->foto = $_FILES["foto"]['name'];
            $productonueva ->nombre = $request->nombre;
            $productonueva ->descripcion = $request->descripcion;
            $productonueva ->id_categoria = $request->id_categoria;
            $productonueva -> save();
            $productos = Producto::orderBy('id','desc')->get();
            //mover foto
                $estructura = "fotos/".$productos[0]->id;
                if (!is_dir($estructura)){
                    mkdir($estructura, 0777, true);
                }
                move_uploaded_file($_FILES["foto"]['tmp_name'], $estructura."/".$_FILES["foto"]['name']);
               
        }
        return redirect(route('listarProductos'));

    }
}
