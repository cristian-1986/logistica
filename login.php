<?php

session_start();

if (isset($_SESSION['id_usuario'])){
    header('Location: inicio.php');
}

require 'config/db.php';

if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'])){
   $records = $conn->prepare('SELECT id, nombre, email, password FROM usuarios WHERE email=:email'); 
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    
    $message = '';
    
if (count($results)>0 && password_verify($_POST['password'],$results['password'])){
    $_SESSION['id_usuario'] = $results['id'];
    header('location: inicio.php');
} else {
    $message = 'Lo siento, tus credenciales no coinciden';
}
    
}
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <title>Login</title>
        <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "hoja de estilo">
        <link rel="stylesheet" href="css/styles.css"
    </head>
    <body>
        
        <?php require 'partials/header.php'?>
        
        <form action="login.php" class="login" method="post">
        
        <?php if (!empty($message)): ?>
            <p><?= $message ?></p>
        
        <?php endif; ?>
        
            <h2>Iniciar sesión...</h2>    
            
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre">  
            <input type="text" name="email" id="email" placeholder="Ingrese Email">
            <input type="password" name="password" id="password" placeholder="Ingrese Contraseña">      
            <input type="submit" value="Enviar">
            
            <br></br>
            
            <span>or <a href="signup.php">Registrarse</a></span>

        </form>

    </body>
    
</html>

