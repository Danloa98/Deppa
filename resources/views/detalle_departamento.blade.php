<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de Departamento</title>
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

    <h1>Detalle de Departamento: {{ $departamento['nombre'] }}</h1>

    <!-- Filtros -->
    <div class="filter-container">
        <input type="text" class="filter-input" id="searchInput" placeholder="Buscar por puesto">
        <input type="text" class="filter-input" id="salaryInput" placeholder="Filtrar por salario">
        <button class="filter-button" onclick="applyFilters()">Aplicar Filtros</button>
    </div>

    <!-- Tabla de puestos -->
    <div class="table-container">
        <table id="puestosTable">
            <thead>
                <tr>
                    <th>Puesto</th>
                    <th>Salario</th>
                    <th>Descripción</th>
                    <th>Detalle Empleados</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se generan dinámicamente las filas de la tabla -->
                @foreach ($departamento['puestos'] as $puesto)
                    <tr>
                        <td>{{ $puesto['nombre'] }}</td>
                        <td>{{ $puesto['salario'] }}</td>
                        <td>{{ $puesto['descripcion'] }}</td>
                        <td><button onclick="verEmpleados('{{ $puesto['nombre'] }}')">Ver Empleados</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function applyFilters() {
            var searchInput = document.getElementById('searchInput').value.toLowerCase();
            var salaryInput = document.getElementById('salaryInput').value.toLowerCase();
            var table = document.getElementById('puestosTable');
            var rows = table.getElementsByTagName('tr');
            for (var i = 0; i < rows.length; i++) {
                var rowData = rows[i].getElementsByTagName('td');
                if (rowData) {
                    var puesto = rowData[0].textContent.toLowerCase();
                    var salario = rowData[1].textContent.toLowerCase();
                    if ((searchInput && puesto.indexOf(searchInput) === -1) || (salaryInput && salario.indexOf(salaryInput) === -1)) {
                        rows[i].style.display = 'none';
                    } else {
                        rows[i].style.display = '';
                    }
                }
            }
        }

        function verEmpleados(puesto) {
            // Aquí puedes redirigir a la página de detalle de empleados para el puesto seleccionado
            // por ejemplo:
            //window.location.href = `/empleados/detalles/${encodeURIComponent(puesto)}`;
            alert('Redirigir a la página de detalle de empleados para el puesto: ' + puesto);
        }
    </script>

</body>
</html>
