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

class Database{
    public static function connect(){
        $db= new mysqli($server,$usarname,$password,$logistica);
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}

?>
