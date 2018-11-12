<?php

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
use App\Moneda;
use App\Articulos;
use App\Art_categoria;
use App\Art_Sub_categoria;

Route::get('/', function () {
    return view('car-repair.index');
});
Route::get('admin/articulo', function () {
    return view('listar-articulos');
});
Route::resource('articulos', 'ArticulosController');
