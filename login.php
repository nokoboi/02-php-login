<?php
// Inicia sesion sin ningun dato
session_start();
// Le decimos que el contenido de la respuesta es formato json
header("Content-type: application/json");

// Recibir los datos del usuario y comprobar si son correctos

// Usuario por defecto válido
$usuarioValido = 'juanito';
$contasenaValida = '123456';

// Crear variables con los datos recibidos. El ?? es para comprobar si hay algo
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Equivalencia de ??
// if(isset($_POST['username'])){
//     $usuarioValido = $_POST['username'];
// }else{
//     $usuarioValido = '';
// }

if($username === $usuarioValido && $password === $contasenaValida) {
    // Cuando el usuario y la contraseña son correctos
    // creamos la sesion con nombre user y valor username
    $_SESSION['user'] = $username;

    echo json_encode(['success' => true]);
}else{
    echo json_encode(['success'=> false]);
}

