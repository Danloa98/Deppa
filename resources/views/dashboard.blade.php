<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column;
        }

        .menu {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }

        .header {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #3498db;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            margin: 20px;
        }

        .logo {
            text-align: center;
            margin-top: 20px;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <div class="menu">
        <a href="{{ route('relaciones_laborales') }}">Relaciones Laborales</a>
        <a href="{{ route('modulo2') }}">Modulo 2</a>
        <a href="{{ route('modulo3') }}">Modulo 3</a>
    </div>

    <div class="header">
        DEPPA
    </div>

    <div class="login-container">
        <!-- Contenido del módulo va aquí -->
    </div>

    <div class="logo">
        <img src="{{ asset('path/to/university_logo.png') }}" alt="Logo USAC">
    </div>

</body>
</html>

