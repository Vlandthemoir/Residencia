<?php

namespace App\Http\Controllers;
use App\Models\Objetos;
use Illuminate\Http\Request;

class VistasController extends Controller
{
    //vista de inicio
    public function create_home (){
        return view('WEB.home');
    }
    //vista de los cursos
    public function create_cursos (){
        $excludedIds = [1];
        $objetos = Objetos::whereNotIn('id', $excludedIds)->get();
        return view('WEB.cursos',compact('objetos'));
    }
    //vista de las rutas
    public function create_rutas (){
        return view('WEB.rutas');
    }
    public function create_ruta ($id){
        $dato = $id;
        return view('WEB.ruta',compact('dato'));
    }
}
