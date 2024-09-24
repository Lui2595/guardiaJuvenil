<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElementosController;
use App\Http\Controllers\PruebasController;
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

Route::get('/', function () {
    return view('construction');
});
Route::get('/registro', function () {
    return view('sulicitud_registro');
});

Auth::routes();


Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/elementos', ElementosController::class);
Route::get('/admin/pruebas/{id}/{elemento_id}', [PruebasController::class, 'evaluar'])->name('pruebas.evaluar');
Route::post('/admin/pruebas/{id}/{elemento_id}', [PruebasController::class, 'evaluarStore'])->name('pruebas.store');


