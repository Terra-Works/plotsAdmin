<?php
// Redirigir al usuario
function redirect($url) {
    header("Location: $url");
    exit;
}

// Verificar si el usuario está autenticado
function isAuthenticated() {
    session_start();
    return isset($_SESSION['user_id']);
}
?>
