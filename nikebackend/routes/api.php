<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GetDataCarritoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ExistingCartController;
use App\Http\Controllers\GetDataClientController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\Producto_CarritoController;
use App\Http\Controllers\VentasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(ProductController::class)->group(function(){
    Route::get('/products','index');
    Route::post('/product','store');
    Route::get('/product/{id}','show');
    Route::put('/product/{id}','update');
    Route::delete('/product/{id}','destroy');
});

Route::controller(CarritoController::class)->group(function(){
    Route::get('/carritos','index');
    Route::post('/carrito','store');
    Route::get('/carrito/{id}','show');
    Route::put('/carrito/{id}','update');
    Route::delete('/carrito/{id}','destroy');
});
Route::controller(ClientController::class)->group(function(){
    Route::get('/clientes','index');
    Route::post('/cliente','store');
    Route::get('/cliente/{email}','Userlogin');
    Route::get('/cliente/{id}','show');
    Route::put('/cliente/{id}','update');
    Route::delete('/cliente/{id}','destroy');
});

Route::controller(Producto_CarritoController::class)->group(function(){
    Route::get('/productocarts','index');
    Route::post('/productocart','store');
    Route::get('/productocart/{id}','show');
    Route::put('/productocart/{id}','update');
    Route::delete('/productocart/{id}','destroy');
});
Route::controller(GetDataClientController::class)->group(function(){
    Route::post('/getDataClient','show');
    
});
Route::controller(ExistingCartController::class)->group(function(){
    Route::post('/existinCart','show');
    
});
Route::controller(GetDataCarritoController::class)->group(function(){
    Route::get('/getDataCarritos','index');
    Route::post('/getDataCarrito','store');
    Route::get('/getDataCarrito','show');
    Route::put('/getDataCarrito/{id}','update');
    Route::delete('/getDataCarrito/{id}','destroy');
});
Route::controller(CategoriaController::class)->group(function(){
    Route::get('/categorias','index');
    Route::post('/categoria','store');
    Route::get('/categoria','show');
    Route::put('/categoria/{id}','update');
    Route::delete('/categoria/{id}','destroy');
});
Route::controller(MetodoPagoController::class)->group(function(){
    Route::get('/metodos','index');
    Route::post('/metodo','store');
    Route::get('/metodo','show');
    Route::put('/metodo/{id}','update');
    Route::delete('/metodo/{id}','destroy');
});
Route::controller(VentasController::class)->group(function(){
    Route::get('/ventas','index');
    Route::post('/venta','store');
    Route::get('/venta','show');
    Route::put('/venta/{id}','update');
    Route::delete('/venta/{id}','destroy');
});



