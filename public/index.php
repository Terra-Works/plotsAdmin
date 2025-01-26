<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definir si el menú lateral debe mostrarse
$showSidebar = false;

// Obtener la ruta solicitada
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Establecer el archivo de contenido según la ruta
switch ($requestUri) {
    case 'login':
        $pageContent = 'login.php';
        break;
    case 'register':
        $pageContent = 'register.php';
        break;
    case 'dashboard':
        $pageContent = 'dashboard.php';
        $showSidebar = true; // Mostrar el menú lateral solo en el dashboard
        break;
    case 'home':
    default:
        $pageContent = 'home.php';
        break;
}

// Incluir la cabecera (navbar y contenido común)
echo "<pre>Incluyendo header.php</pre>"; // Mensaje de depuración
include '../templates/header.php';

// Incluir el menú lateral si es necesario
echo "<pre>Incluyendo sidebar.php</pre>"; // Mensaje de depuración
include '../templates/sidebar.php';

// Incluir la página dinámica
include $pageContent;

// Incluir el pie de página (footer común)
echo "<pre>Incluyendo footer.php</pre>"; // Mensaje de depuración
include '../templates/footer.php';

