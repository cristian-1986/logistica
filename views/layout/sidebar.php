
<!--Barra Menu-->
<aside id="lateral">
    
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
    
    <h4>: <?= $user['nombre']; ?></h4> 
</aside> 
    



