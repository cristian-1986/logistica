<?php
require_once 'models/usuario.php';

class usuarioController{
    
    
    public function index(){ 
        
    $usuario = new Usuario();
    $usuarios = $usuario->getAll();
    //renderizar vista
    require_once 'views/usuarios/usuarios.php';       
    }
    
    public function registro(){
    require_once 'views/usuarios/registro.php';
    }
    
    public function saveUsuario(){
        
    }
}

