<?php
    $server= 'localhost';
    $username= 'root';
    $password= '';
    $database = 'logistica';
    
try {
    $conn= new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch (PDOException $e) {
    die('Conexión Falló: '.$e->getMessage());
}


?>
