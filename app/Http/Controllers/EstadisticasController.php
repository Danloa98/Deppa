<?php
// app/Http/Controllers/EstadisticasController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    public function index()
    {
        return view('estadisticas');
    }
}
