<?php
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
include './templates/header.php';

// Incluir el menú lateral si es necesario
include './templates/sidebar.php';

// Incluir la página dinámica
include $pageContent;

// Incluir el pie de página (footer común)
include './templates/footer.php';
