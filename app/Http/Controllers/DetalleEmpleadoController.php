<?php
// app/Http/Controllers/DetalleEmpleadoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleEmpleadoController extends Controller
{
    public function certificaciones($id)
    {
        // Obtén el nombre del usuario desde la base de datos
        $nombreUsuario = 'Nombre del Usuario'; // Reemplaza con tu lógica real

        return view('certificaciones', compact('nombreUsuario'));
    }

    public function capacitaciones($id)
    {
        // Obtén el nombre del usuario desde la base de datos
        $nombreUsuario = 'Nombre del Usuario'; // Reemplaza con tu lógica real

        return view('capacitaciones', compact('nombreUsuario'));
    }

    public function historial($id)
    {
        // Obtén el nombre del usuario desde la base de datos
        $nombreUsuario = 'Nombre del Usuario'; // Reemplaza con tu lógica real

        return view('historial', compact('nombreUsuario'));
    }

    public function evaluaciones($id)
    {
        // Obtén el nombre del usuario desde la base de datos
        $nombreUsuario = 'Nombre del Usuario'; // Reemplaza con tu lógica real

        return view('evaluaciones', compact('nombreUsuario'));
    }
}
