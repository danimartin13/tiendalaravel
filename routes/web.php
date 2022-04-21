<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/categorias', [CategoriaController::class, 'listar'])->name("listarCategorias");
Route::get('/productos', [ProductoController::class, 'listar'])->name("listarProductos");


Route::get('/ventas', function () {
    return view('ventas');
});
Auth::routes();

Route::get('/', [HomeController::class,'index'])->name('home');


//anadir categoria
Route::post('/nuevaCategoria', [CategoriaController::class, 'anadircategoria'])->name('anadircategoria');
//BORRAR CATEGOIRA
Route::delete('/eliminarCategoria{categoria}', [CategoriaController::class, 'eliminarcategoria'])->name('eliminarcategoria');

//anadir categoria
Route::post('/nuevaProducto', [ProductoController::class, 'anadirproducto'])->name('anadirproducto');