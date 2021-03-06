<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Categoria;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    $productos = Producto::get();
    $categorias = Categoria::where('estado','!=','2')->get();
    
        return view('home', 
        [
            'productos'=>$productos,
            'categorias'=>$categorias
        ]);
    }
    // inicio-sesion
 
}
