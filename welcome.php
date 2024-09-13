<?php
    require_once 'check_session.php';
    require_login();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido!</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="welcome-container">
        <h1 id="user">Bivenvenido <?php echo htmlspecialchars($_SESSION['user']); ?></h1>
        <p>Has iniciado sesión correctamente.</p>
        <a href="logout.php">Cerrar sesión</a>
    </div>
</body>
</html>