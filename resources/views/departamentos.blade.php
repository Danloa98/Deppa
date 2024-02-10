<!-- resources/views/departamentos.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departamentos</title>
    <style>
        /* Estilos similares a los de otras vistas */

        .title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #3498db;
        }

        .content-container {
            max-width: 800px;
            margin: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .search-bar {
            margin-bottom: 20px;
        }

        .department-list {
            text-align: left;
        }

        .department-list a {
            display: block;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            color: #333;
            text-decoration: none;
        }

        .return-button {
            font-size: 16px;
            padding: 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="title">DEPARTAMENTOS</div>

    <!-- Barra de búsqueda -->
    <div class="content-container search-bar">
        <input type="text" placeholder="Buscar departamento...">
    </div>

    <!-- Listado de departamentos -->
    <div class="content-container department-list">
        <a href="{{ route('detalle_departamento', ['departamento' => 'X']) }}">X</a>
        <a href="{{ route('detalle_departamento', ['departamento' => 'Y']) }}">Y</a>
        <a href="{{ route('detalle_departamento', ['departamento' => 'Z']) }}">Z</a>
    </div>

    <!-- Botón de regresar -->
    <a href="{{ route('dashboard') }}" class="return-button">Regresar</a>

</body>
</html>
