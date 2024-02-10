<!-- resources/views/empleados.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .search-bar {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 200px;
            padding: 8px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin: 20px;
            color: #3498db;
        }

        .employee-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .employee-card {
            margin: 10px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            display: block;
        }
    </style>
</head>
<body>

    <input type="text" class="search-bar" placeholder="Buscar por nombre" oninput="searchEmployees(this.value)">

    <div class="title">
        Listado de Empleados
    </div>

    <div class="employee-list" id="employeeList">
        <!-- Empleados se cargarán dinámicamente aquí -->
        @foreach($empleados as $empleado)
        <a href="{{ url('/empleados/detalles/' . $empleado->id) }}" class="employee-card" data-nombre="{{ strtolower($empleado->nombre) }}">
                {{ $empleado->nombre }}
            </a>
        @endforeach
    </div>

    <script>
        function searchEmployees(query) {
            query = query.toLowerCase();
            const employeeCards = document.querySelectorAll('.employee-card');

            employeeCards.forEach(card => {
                const nombre = card.getAttribute('data-nombre');
                if (nombre.includes(query)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>

</body>
</html>
