<!-- 
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #333;
        }
        .container {
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a la Plataforma</h1>
        <p>Selecciona una de las opciones para continuar:</p>
        <a href="public/register.php" class="button">Registro</a>
        <a href="public/login.php" class="button">Login</a>
        <a href="public/dashboard.php" class="button">Dashboard</a>
    </div>
</body>
</html> 
-->

<?php
// Definir si el menú lateral debe mostrarse
$showSidebar = false;

// Obtener la ruta solicitada
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Establecer el archivo de contenido según la ruta
switch ($requestUri) {
    case 'login':
        $pageContent = 'public/login.php';
        break;
    case 'register':
        $pageContent = 'public/register.php';
        break;
    case 'dashboard':
        $pageContent = 'public/dashboard.php';
        $showSidebar = true; // Mostrar el menú lateral solo en el dashboard
        break;
    case 'home':
    default:
        $pageContent = 'public/home.php';
        break;
}

// Incluir la cabecera (navbar y contenido común)
include 'templates/header.php';

// Incluir el menú lateral si es necesario
include 'templates/sidebar.php';

// Incluir la página dinámica
include $pageContent;

// Incluir el pie de página (footer común)
include 'templates/footer.php';
