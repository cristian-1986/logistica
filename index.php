<?php

session_start();
require 'config/db.php';

if (isset($_SESSION['id_usuario'])){
    $records = $conn->prepare('SELECT id, nombre, email, password FROM usuarios WHERE id = :id');
    $records->bindParam(':id',$_SESSION['id_usuario']) ;
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    $user = null;
    
    if (count($results)>0){
        $user = $results;
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bienvenido a Aplicación</title>
        <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "hoja de estilo">
        <link rel="stylesheet" href="css/styles.css"
    </head>
    <body>

        <?php require 'partials/header.php' ?>

        <?php if (!empty($user)): ?>
            <br> Bienvenido, <?= $user['nombre']; ?>
            <br> Tu estas logueado correctamente
            <br>
            <a href="logout.php">
                Cerrar Sesión
            </a>

        <?php else: ?>

            <h1>Por favor loguearse</h1>

            <a href="login.php">Login</a> or
            <a href="signup.php">Registrarse</a>        

        <?php endif; ?>

    </body>
    
</html>