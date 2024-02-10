<!-- resources/views/detalle.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Empleado</title>
    <style>
        /* Estilos similares a los de las vistas anteriores */

        .header {
            font-size: 24px;
            font-weight: bold;
            margin: 20px;
            color: #3498db;
            text-align: center;
        }

        .details-container {
            width: 80%;
            margin: 20px auto;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details-table th, .details-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .details-table th {
            background-color: #3498db;
            color: #fff;
        }

        .navigation-links {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .return-button {
            font-size: 16px;
            padding: 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="header">Detalles del Empleado</div>

    <div class="details-container">
        <table class="details-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Genero</th>
                    <th>Puesto Actual</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Datos de ejemplo -->
                    <td>Nombre Ejemplo</td>
                    <td>Apellido Ejemplo</td>
                    <td>01/01/1990</td>
                    <td>Masculino</td>
                    <td>Puesto Ejemplo</td>
                </tr>
            </tbody>
        </table>

        <div class="navigation-links">
            <a href="{{ url("/empleados/detalles/1/certificaciones") }}">Certificaciones</a>   
            <a href="{{ url("/empleados/detalles/1/capacitaciones") }}">Capacitaciones</a>
            <a href="{{ url("/empleados/detalles/1/historial") }}">Historial</a>
            <a href="{{ url("/empleados/detalles/1/evaluaciones") }}">Evaluaciones</a>        

        </div>
    </div>

    <button class="return-button" onclick="goBack()">Regresar</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

</body>
</html>
