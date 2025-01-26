<?php
$host = '127.0.0.1'; // Localhost para desarrollo
$dbname = 'despinoz_plotAdmin';
$username = 'despinoz_plotaAdmin'; // Cambia si tienes otro usuario configurado
$password = 'JGn=qFXT,I5g'; // Agrega tu contraseña si aplica

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>
