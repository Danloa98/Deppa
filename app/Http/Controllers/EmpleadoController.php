<?php

// app/Http/Controllers/EmpleadoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        // Simulación de obtener datos reales de la base de datos
        $empleados = [
            (object)['id' => 1, 'nombre' => 'Juan Pérez'],
            (object)['id' => 2, 'nombre' => 'María González'],
            // ... más empleados
        ];

        return view('empleados', compact('empleados'));
    }

    public function detalles($id)
    {
        // Simulación de obtener datos reales de la base de datos
        $empleado = (object)[
            'id' => $id,
            'nombre' => 'Juan Pérez',
            'apellido' => 'Pérez',
            'fecha_nacimiento' => '01/01/1980',
            'genero' => 'Masculino',
            'puesto_actual' => 'Programador',
        ];

        return view('detalles', compact('empleado'));
    }
}
