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

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 8px;
            z-index: 1000;
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

    <!-- Pop-up para mensajes -->
    <div class="popup" id="popup">
        Elemento <span id="popupMessage">agregado</span> exitosamente
    </div>

    <script>
        function showInput() {
            document.getElementById('inputContainer').style.display = 'flex';
            document.getElementById('tableContainer').style.display = 'none';
        }

        function showTable(action) {
            document.getElementById('tableContainer').style.display = 'block';
            document.getElementById('inputContainer').style.display = 'none';

            // Aquí puedes agregar lógica para cargar los datos de la base de datos
            // y mostrarlos en la tabla. Por ahora, vamos a mostrar una fila de ejemplo.

            // Limpia el contenido actual de la tabla
            document.getElementById('tableBody').innerHTML = '';

            // Ejemplo de una fila en la tabla
            const tableRow = document.createElement('tr');
            tableRow.innerHTML = `
                <td>Nombre del Elemento</td>
                <td class="action-buttons">
                    <button class="action-button" onclick="deleteItem()">Eliminar</button>
                    <button class="action-button" onclick="editItem()">Editar</button>
                </td>
            `;

            // Agrega la fila a la tabla
            document.getElementById('tableBody').appendChild(tableRow);
        }

        function addItem() {
            // Aquí puedes agregar lógica para enviar el nuevo elemento a la base de datos.
            // Por ahora, simplemente mostramos un mensaje en el pop-up.
            const newItemName = document.getElementById('newItem').value;
            document.getElementById('popupMessage').textContent = 'agregado';
            document.getElementById('popup').style.display = 'block';
            setTimeout(() => {
                document.getElementById('popup').style.display = 'none';
            }, 2000);

            // Limpia el input después de agregar
            document.getElementById('newItem').value = '';
        }

        function deleteItem() {
            // Aquí puedes agregar lógica para eliminar el elemento seleccionado de la base de datos.
            // Por ahora, simplemente mostramos un mensaje en el pop-up.
            document.getElementById('popupMessage').textContent = 'eliminado';
            document.getElementById('popup').style.display = 'block';
            setTimeout(() => {
                document.getElementById('popup').style.display = 'none';
            }, 2000);
        }

        function editItem() {
            // Muestra el input para editar el nombre del elemento
            const inputField = document.createElement('input');
            inputField.type = 'text';
            inputField.className = 'input-text';
            inputField.id = 'editItemInput';
            inputField.placeholder = 'Nuevo nombre';
            document.getElementById('tableBody').appendChild(inputField);

            // Muestra el botón de guardar
            const saveButton = document.createElement('button');
            saveButton.textContent = 'Guardar';
            saveButton.className = 'add-button';
            saveButton.onclick = function() {
                saveEdit();
            };
            document.getElementById('tableBody').appendChild(saveButton);
        }

        function saveEdit() {
            // Aquí puedes agregar lógica para guardar la edición del elemento en la base de datos.
            // Por ahora, simplemente mostramos un mensaje en el pop-up.
            document.getElementById('popupMessage').textContent = 'editado';
            document.getElementById('popup').style.display = 'block';
            setTimeout(() => {
                document.getElementById('popup').style.display = 'none';
            }, 2000);

            // Remueve el input de edición y el botón de guardar después de guardar
            document.getElementById('editItemInput').remove();
            document.getElementById('tableBody').lastChild.remove();
        }
    </script>

</body>
</html>
