<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
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
Route::get('/categoria-{categoria}', [CategoriaController::class,'listarProductos'])->name('categoria');


//anadir categoria
Route::post('/nuevaCategoria', [CategoriaController::class, 'anadircategoria'])->name('anadircategoria');
//BORRAR CATEGOIRA
Route::delete('/eliminarCategoria{categoria}', [CategoriaController::class, 'eliminarcategoria'])->name('eliminarcategoria');

//anadir categoria
Route::post('/nuevaProducto', [ProductoController::class, 'anadirproducto'])->name('anadirproducto');

//inicio de sesion
Route::get('/iniciosesion', [UsuarioController::class,'iniciosesion'])->name('iniciosesion');

//inicio de sesion
Route::get('/registrarse', [UsuarioController::class,'registrarse'])->name('registrarse');

//comprobar inicio
Route::get('/iniciosesion', [UsuarioController::class,'comprinicio'])->name('comprinicio');

//compregis
Route::get('/registrarse', [UsuarioController::class,'compregis'])->name('compregis');