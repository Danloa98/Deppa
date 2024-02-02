<!-- resources/views/catalogos.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogos</title>
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

        .combo-box {
            font-size: 16px;
            padding: 8px;
            margin-right: 20px;
        }

        .buttons-container {
            margin-top: 20px;
        }

        .input-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .input-text {
            font-size: 16px;
            padding: 8px;
            width: 200px;
        }

        .add-button {
            font-size: 16px;
            padding: 8px;
            background-color: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
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

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .action-button {
            padding: 5px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <div class="title">
        Catálogos
    </div>

    <div class="content-container">
        <!-- Contenido del módulo de Catálogos va aquí -->
        <div class="combo-box-container">
            <label for="catalogo">Seleccionar Catálogo:</label>
            <select id="catalogo" name="catalogo" class="combo-box">
                <option value="certificaciones">Certificaciones</option>
                <option value="beneficios">Beneficios</option>
                <option value="incidentes">Incidentes</option>
            </select>
        </div>

        <div class="buttons-container">
            <button class="add-button" onclick="showInput()">Agregar</button>
            <button class="action-button" onclick="showTable('add')">Eliminar</button>
            <button class="action-button" onclick="showTable('edit')">Editar</button>
        </div>

        <div class="input-container" style="display: none;" id="inputContainer">
            <input type="text" class="input-text" id="newItem" placeholder="Ingrese el nombre">
            <button class="add-button" onclick="addItem()">Agregar</button>
        </div>

        <div class="table-container" style="display: none;" id="tableContainer">
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <!-- Filas de la tabla se generarán dinámicamente -->
                </tbody>
            </table>
        </div>

    </div>

    <script>
        function showInput() {
            document.getElementById('inputContainer').style.display = 'flex';
            document.getElementById('tableContainer').style.display = 'none';
        }

        function showTable(action) {
            document.getElementById('tableCont
