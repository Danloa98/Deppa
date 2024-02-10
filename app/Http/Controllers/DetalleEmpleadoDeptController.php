<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleEmpleadoDeptController extends Controller
{
    public function show($id)
    {
        // Aquí puedes obtener los datos del empleado y sus detalles del departamento
        // y pasarlos a la vista

        $empleado = [
            'nombre' => 'Nombre Empleado',
            'empleados' => [
                [
                    'nombre' => 'Empleado 1',
                    'fecha_inicio' => '01/01/2022',
                    'estado' => 'Activo',
                    'promovido' => 'Sí'
                ],
                [
                    'nombre' => 'Empleado 2',
                    'fecha_inicio' => '02/01/2022',
                    'estado' => 'Inactivo',
                    'promovido' => 'No'
                ],
                [
                    'nombre' => 'Empleado 3',
                    'fecha_inicio' => '03/01/2022',
                    'estado' => 'Activo',
                    'promovido' => 'Sí'
                ],
            ]
        ];

        return view('detalle_empleado_dept', compact('empleado'));
    }
}
