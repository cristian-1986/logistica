    <?php
    session_start();
    if (isset($_SESSION['id_usuario'])) {
        header('Location: inicio.php');
    }
    require 'config/db.php';
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, nombre, email, password FROM usuarios WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $message = '';
        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['id_usuario'] = $results['id'];
            header('location: inicio.php');
        } else {
            $message = 'Lo siento, tus credenciales no coinciden';
        }
    }
    ?>


    <?php
    require_once 'autoload.php';
    require_once 'config/parametros.php';
    require_once 'views/layout/header.php';
    require_once 'views/layout/menu.php';
    ?>
        

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

            <span>or <a href="registrarse.php">Registrarse</a></span>

        </form>
        <?php require 'views/layout/footer.php' ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>

</html>

