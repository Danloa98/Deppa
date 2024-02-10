<?php

// app/Http/Controllers/DetalleDepartamentoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleDepartamentoController extends Controller
{
    public function detalles($departamento)
    {
        // Aquí puedes implementar la lógica para obtener los detalles del departamento
        // y pasarlos a la vista correspondiente
        // Por ahora, utilizaremos datos de ejemplo
        $departamentoDetalles = [
            'nombre' => 'Departamento de Prueba',
            'puestos' => [
                ['nombre' => 'Puesto 1', 'salario' => '$1000', 'descripcion' => 'Descripción del puesto 1'],
                ['nombre' => 'Puesto 2', 'salario' => '$1200', 'descripcion' => 'Descripción del puesto 2'],
                ['nombre' => 'Puesto 3', 'salario' => '$1500', 'descripcion' => 'Descripción del puesto 3']
            ]
        ];

        return view('detalle_departamento', ['departamento' => $departamentoDetalles]);
    }
}
