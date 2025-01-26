<?php
include '../templates/header.php';

session_start();
require '../config/db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM user_data WHERE user_id = ?");
$stmt->execute([$user_id]);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <h2>Datos del usuario:</h2>
    <?php foreach ($data as $row): ?>
        <p><?php echo htmlspecialchars($row['data']); ?></p>
    <?php endforeach; ?>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>


<?php

include '../templates/footer.php';
 
?>