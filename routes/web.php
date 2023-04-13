<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PedidosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Productos', function () {
    return view('Productos.index');
});

Route::get('/Productos/crear', function () {   
    return view('Productos.crear');
});

Route::get('/Productos/edit', function () {   
    return view('Productos.edit');
});

Route::get('/Productos/eliminar', function () {   
    return view('Productos.eliminar');
});

Route::get('/Pedidos', function () {
    return view('Pedidos.index');
});

Route::get('/Pedidos/crear', function () {   
    return view('Pedidos.crear');
});

Route::get('/Pedidos/edit', function () {   
    return view('Pedidos.edit');
});

Route::get('/Pedidos/eliminar', function () {   
    return view('Pedidos.eliminar');
});

Route::resource('Productos',ProductosController::class);
Route::resource('Pedidos',PedidosController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
