<?php
//require 'config/db.php';

$message = '';

if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);

    $stmt->bindParam(':email', $_POST['email']);

    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Ha sido creado usuario satisfactoriamente';
    } else {
        $message = 'Ha ocurrido un error creando contraseña';
    }
}
if (!empty($message)):
    ?>
    <p><?= $message ?></p>
<?php endif; ?>


<form class="login" action="registrarse.php" method="post">
            <h2>Por favor registrarse</h2>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre">  
            <input type="text" name="email" id="email" placeholder="Ingrese Email">
            <input type="password" name="password" id="password" placeholder="Ingrese Contraseña">      
            <input type="password" name="confirm_password" id="password" placeholder="Confirmar Contraseña">
            <input type="submit" value="Enviar">

            <br></br>
            <span>or <a href="login.php">Login</a></span>
</form>    