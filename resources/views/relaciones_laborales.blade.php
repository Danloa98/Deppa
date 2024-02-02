<!-- resources/views/relaciones_laborales.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relaciones Laborales</title>
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

        .menu-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }

        .logo img {
            max-height: 50px;
            max-width: 100%;
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

        .combo-box-container {
            text-align: right; /* Alineación a la derecha */
            margin-bottom: 10px;
        }

        .combo-box {
            font-size: 16px;
            padding: 8px;
        }

        .image-container {
            margin-top: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }

        /* Estilos para el submenú */
        .sub-menu {
            display: none;
            position: absolute;
            background-color: #333;
            border-radius: 4px;
            padding: 10px;
            z-index: 1;
            text-align: left;
        }

        .sub-menu a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }

        .combo-box-container:hover .sub-menu {
            display: block;
        }
    </style>
</head>
<body>

    <div class="menu-container">
        <div class="combo-box-container">
            <label for="menu">Menú:</label>
            <select id="menu" name="menu" class="combo-box">
                <option value="empleado">Empleado</option>
                <option value="estadisticas">Estadísticas</option>
                <option value="expedientes">Expedientes</option>
                <option value="puestos_departamentos">Puestos y Departamentos</option>
                <option value="reportes">Reportes</option>
                <optgroup label="Admin. Sistema">
                    <option value="catalogos">Catalogos</option>
                </optgroup>
            </select>
            <!-- Submenú para la opción "Admin. Sistema" -->
            <div class="sub-menu">
                <a href="#">Catalogos</a>
            </div>
        </div>
        <div class="logo">
            <img src="{{ asset('path/to/institution_logo.png') }}" alt="Logo Institución">
        </div>
    </div>

    <div class="content-container">
        <!-- Contenido del módulo de Relaciones Laborales va aquí -->
        <div class="image-container">
            <img src="{{ asset('path/to/module_image.png') }}" alt="Imagen Módulo">
        </div>
    </div>

</body>
</html>
