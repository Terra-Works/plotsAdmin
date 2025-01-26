<?php
// Enrutamiento básico de URLs
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Redirigir a las páginas correspondientes según la URI solicitada
switch ($requestUri) {
    case 'register':
        // Lógica de registro
        require './public/register.php';
        break;
    case 'login':
        // Lógica de login
        require './public/login.php';
        break;
    case 'dashboard':
        // Lógica del dashboard
        require './public/dashboard.php';
        break;
    default:
        // Página principal por defecto
        require './index.html';  // La página principal (HTML)
        break;
}
?>
