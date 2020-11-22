<?php
session_start();
require 'config/db.php';
    if (isset($_SESSION['id_usuario'])) {
        $records = $conn->prepare('SELECT id, nombre, email, password FROM usuarios WHERE id = :id');
        $records->bindParam(':id', $_SESSION['id_usuario']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $user = null;
        if (count($results) > 0) {
            $user = $results;
        }
    }
?>

        <?php require 'views/layout/header.php' ?>


        <?php if (!empty($user)): ?> 

            <form class="login">
                <br> Bienvenido, <?= $user['nombre']; ?>
                <br> Tu estas logueado correctamente
                <br>
                <br>
                <a href="logout.php">Cerrar Sesión</a>
                <br>  
                <br>
                <a href="inicio.php">Volver al menú Principal</a>
            </form>

        <?php else: ?>
            <form class="login">
                <h2>Por favor loguearse</h2>

                <a href="login.php">Login</a> or
                <a href="registrarse.php">Registrarse</a>   
            </form>

        <?php endif; ?>

        <?php require 'views/layout/footer.php' ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

</html>