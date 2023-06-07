<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasController;
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
Route::get('/',[VistasController::class,'create_home'])
->name('WEB.home');
Route::get('/cursos',[VistasController::class,'create_cursos'])
->name('WEB.cursos');
Route::get('/rutas',[VistasController::class,'create_rutas'])
->name('WEB.rutas');
Route::get('/ruta/{id}',[VistasController::class,'create_ruta'])
->name('WEB.ruta');

/*Route::get('/', function () {
    return view('WEB.home');
})->name('WEB.home');*/
/*Route::get('/cursos', function () {
    return view('WEB.cursos');
})->name('WEB.cursos');*/