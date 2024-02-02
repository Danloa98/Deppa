<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            flex-direction: column; /* Nueva propiedad para alinear en columna */
        }

        .header {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #3498db; /* Cambia el color según tus preferencias */
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .user-icon {
            width: 80px;
            height: 80px;
            background-color: #3498db;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
        }

        .login-form {
            max-width: 300px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="header">
        DEPPA
    </div>

    <div class="login-container">
        <div class="user-icon">
            <span>&#128100;</span> <!-- Icono de usuario -->
        </div>
        <div class="login-form">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" placeholder="Ingresa tu usuario">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form-group">
                    <button type="submit">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
