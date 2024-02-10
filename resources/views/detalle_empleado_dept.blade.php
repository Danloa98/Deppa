<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Empleado</title>
    <style>
        /* Estilos similares a los de las otras vistas */
        /* Estilos para los filtros */
        .filter-container {
            margin-bottom: 20px;
        }
        .filter-input {
            padding: 8px;
            width: 200px;
            margin-right: 10px;
        }
        .filter-button {
            padding: 8px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        /* Estilos para la tabla */
        .table-container {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>

    <h1>Detalle de Empleado: {{ $empleado['nombre'] }}</h1>

    <!-- Filtros -->
    <div class="filter-container">
        <input type="text" class="filter-input" id="searchInput" placeholder="Buscar por nombre">
        <input type="text" class="filter-input" id="startDateInput" placeholder="Filtrar por fecha de inicio">
        <input type="text" class="filter-input" id="estadoInput" placeholder="Filtrar por estado">
        <button class="filter-button" onclick="applyFilters()">Aplicar Filtros</button>
    </div>

    <!-- Tabla de empleados -->
    <div class="table-container">
        <table id="empleadosTable">
            <thead>
                <tr>
                    <th>Nombre Empleado</th>
                    <th>Fecha Inicio</th>
                    <th>Estado Actual</th>
                    <th>Promovido</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se generan dinámicamente las filas de la tabla -->
                @foreach ($empleado['empleados'] as $empleado)
                    <tr>
                        <td>{{ $empleado['nombre'] }}</td>
                        <td>{{ $empleado['fecha_inicio'] }}</td>
                        <td>{{ $empleado['estado'] }}</td>
                        <td>{{ $empleado['promovido'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function applyFilters() {
            var searchInput = document.getElementById('searchInput').value.toLowerCase();
            var startDateInput = document.getElementById('startDateInput').value.toLowerCase();
            var estadoInput = document.getElementById('estadoInput').value.toLowerCase();
            var table = document.getElementById('empleadosTable');
            var rows = table.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
                var rowData = rows[i].getElementsByTagName('td');
                if (rowData) {
                    var nombre = rowData[0].textContent.toLowerCase();
                    var fechaInicio = rowData[1].textContent.toLowerCase();
                    var estado = rowData[2].textContent.toLowerCase();
                    if ((searchInput && nombre.indexOf(searchInput) === -1) ||
                        (startDateInput && fechaInicio.indexOf(startDateInput) === -1) ||
                        (estadoInput && estado.indexOf(estadoInput) === -1)) {
                        rows[i].style.display = 'none';
                    } else {
                        rows[i].style.display = '';
                    }
                }
            }
        }
    </script>

</body>
</html>
