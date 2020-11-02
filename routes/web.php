<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;
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

Route::get('/', function () {
    return view('front.index');
});


Route::get('/Login', function () {
    return view('login');
});

Route::get('/Registro', function () {
    return view('Registro');
});

Route::get('/Formulario', function () {
    return view('formulario');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//rutas de contactos
Route::get('/contacto',[ContactosController::class,'create'])->name('contacto.crear');
Route::post('/contacto/store',[ContactosController::class,'store'])->name('contacto.store');
Route::get('/contacto/mostrar',[ContactosController::class,'index'])->name('contacto.index');

