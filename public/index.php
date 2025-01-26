<?php
// Definir si el menú lateral debe mostrarse
$showSidebar = false;

// Obtener la ruta solicitada
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Depurar: Mostrar la ruta solicitada para asegurarte de que está llegando correctamente
echo "<pre>";
echo "Ruta solicitada: " . $requestUri . "<br>";  // Muestra la ruta solicitada
echo "</pre>";

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

// Depurar: Mostrar el archivo de contenido que se está cargando
echo "<pre>";
echo "Cargando archivo: " . $pageContent . "<br>";  // Muestra el archivo que se está cargando
echo "</pre>";

// Incluir la página dinámica
include $pageContent;

// Incluir el pie de página (footer común)
include 'templates/footer.php';
