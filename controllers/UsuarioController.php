<?php

class usuarioController{
    
    public function index(){        
    //renderizar vista
    require_once 'views/usuarios/usuarios.php';       
    }
    
    public function registro(){
    require_once 'views/usuarios/registro.php';
    }
    
    public function saveUsuario(){
        
    }
}

