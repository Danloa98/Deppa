<!-- resources/views/certificaciones.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificaciones</title>
    <style>
        /* Estilos similares a los de las vistas anteriores */

        .header {
            font-size: 20px;
            font-weight: bold;
            margin: 20px;
            color: #3498db;
            text-align: center;
        }

        .certifications-table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        .certifications-table th, .certifications-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .certifications-table th {
            background-color: #3498db;
            color: #fff;
        }

        .add-button {
            font-size: 16px;
            padding: 10px;
            background-color: #3498db;
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
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
        }

        .popup-content {
            text-align: center;
        }

        .popup-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 900;
        }

        .return-button {
            font-size: 16px;
            padding: 10px;
            background-color: #e74c3c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            position: fixed;
            bottom: 10px;
            right: 10px;
        }
    </style>
</head>
<body>

    <div class="header">Certificaciones</div>

    <!-- Nombre del usuario en la esquina superior derecha -->
    <div style="position: absolute; top: 10px; right: 10px;">{{ $nombreUsuario }}</div>

    <table class="certifications-table">
        <thead>
            <tr>
                <th>Nombre de Certificación</th>
                <th>Fecha de Obtención</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Datos de ejemplo -->
            <tr>
                <td>Certificación 1</td>
                <td>01/01/2022</td>
                <td><button class="add-button" onclick="showPopup()">Agregar</button></td>
            </tr>
            <tr>
                <td>Certificación 2</td>
                <td>02/01/2022</td>
                <td><button class="add-button" onclick="showPopup()">Agregar</button></td>
            </tr>
        </tbody>
    </table>

    <!-- Ventana emergente (pop-up) -->
    <div class="popup" id="popup">
        <div class="popup-content">
            Certificación agregada exitosamente
        </div>
    </div>

    <!-- Fondo oscuro transparente para el pop-up -->
    <div class="popup-background" id="popupBackground" onclick="hidePopup()"></div>

    <!-- Botón de regresar -->
    <button class="return-button" onclick="goBack()">Regresar</button>

    <script>
        function showPopup() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('popupBackground').style.display = 'block';
            setTimeout(hidePopup, 2000); // Ocultar después de 2 segundos
        }

        function hidePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('popupBackground').style.display = 'none';
        }

        function goBack() {
            window.history.back();
        }
    </script>

</body>
</html>
