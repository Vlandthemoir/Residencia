<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Objetos;
Route::get('/datos', function () {
    //$datos = App\Models\Objetos::all();
    $excludedIds = [1];
    $objetos = Objetos::whereNotIn('id', $excludedIds)->get();
    return $objetos;
    
});
Route::get('/datos/titulo/1', function () {
    $excludedIds = [1];
    $Nombre = "Estructura de datos";
    $datos = Objetos::where('nombre_conectar', $Nombre)
        ->whereNotIn('id', $excludedIds)
        ->get();

    return $datos;
});
Route::get('/datos/titulo/3', function () {
    $excludedIds = [73];
    $Nombre = "Trading";
    $datos = Objetos::where('nombre_conectar', $Nombre)
        ->whereNotIn('id', $excludedIds)
        ->get();

    return $datos;
});
Route::get('/datos/titulo/2', function () {
    $excludedIds = [93];
    $Nombre = "Primeros auxilios";
    $datos = Objetos::where('nombre_conectar', $Nombre)
        ->whereNotIn('id', $excludedIds)
        ->get();

    return $datos;
});

