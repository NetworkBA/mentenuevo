<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\EspecialistasController;
use App\Http\Controllers\PacientesController;
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
Route::get('/contacto/crear',[ContactosController::class,'create'])->name('contacto.crear');
Route::post('/contacto/store',[ContactosController::class,'store'])->name('contacto.store');

//** RUTAS CON INICIO CON SESION REQUERIDO **/
//Route::group(['middleware'=>['auth']], function () {
    
    //rutas de contactos
    Route::get('/contacto/ver/{id}',[ContactosController::class,'show'])->name('especialista.ver');
    Route::get('/contacto/listar',[ContactosController::class,'index'])->name('contacto.listar');
    Route::get('/contacto/editar/{id}',[ContactosController::class,'edit'])->name('contacto.editar');
    Route::post('/contacto/actualizar',[ContactosController::class,'update'])->name('contacto.actualizar');
    Route::delete('/contacto/eliminar/{id}',[ContactosController::class,'destroy'])->name('contacto.eliminar');    
    //rutas de manejo de usuarios

    //Especialistas
    Route::get('/especialista/crear',[EspecialistasController::class,'create'])->name('especialista.crear');
    Route::post('/especialista/store',[EspecialistasController::class,'store'])->name('especialista.store');
    Route::get('/especialista/listar',[EspecialistasController::class,'index'])->name('especialista.listar');
    Route::get('/especialista/ver/{id}',[EspecialistasController::class,'show'])->name('especialista.ver');
    Route::get('/especialista/editar/{id}',[EspecialistasController::class,'edit'])->name('especialista.editar');
    Route::post('/especialista/actualizar',[EspecialistasController::class,'update'])->name('especialista.actualizar');
    Route::delete('/especialista/eliminar/{id}',[EspecialistasController::class,'destroy'])->name('especialista.eliminar');    

    //Pacientes
    Route::get('/paciente/crear',[PacientesController::class,'create'])->name('especialista.crear');
    Route::post('/paciente/store',[PacientesController::class,'store'])->name('especialista.store');
    Route::get('/paciente/listar',[PacientesController::class,'index'])->name('especialista.listar');
    Route::get('/paciente/ver/{id}',[PacientesController::class,'show'])->name('especialista.ver');
    Route::get('/paciente/editar/{id}',[PacientesController::class,'edit'])->name('especialista.editar');
    Route::post('/paciente/actualizar',[PacientesController::class,'update'])->name('especialista.actualizar');
    Route::delete('/paciente/eliminar/{id}',[PacientesController::class,'destroy'])->name('especialista.eliminar');    

//});
