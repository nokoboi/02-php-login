<?php
    require_once 'check_session.php';
    // si previamente está logeado entonces esto no se carga
    if(is_logged_in()){
        header('Location: welcome.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Inicio de sesión</h1>
        <form id="login-form">
            <input type="text" id="username" placeholder="Nombre de usuario" required>
            <input type="password" id="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>


    <script src="js/funciones.js"></script>
</body>
</html>