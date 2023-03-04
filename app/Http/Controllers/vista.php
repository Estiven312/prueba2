<?php

namespace App\Http\Controllers;
use  App\Models\ModeloEscuadra;
use  App\Models\ModeloClasificacion;
use Illuminate\Http\Request;

class vista extends Controller
{
    public function index()
    {
        $cla = new ModeloClasificacion();
        $escu = new ModeloEscuadra();
        $escuadra = $escu->obtenerTodos();
        $clasificacion = $cla->obtenerTodo();
        return view('index', compact('escuadra', 'clasificacion'));
    }
}
