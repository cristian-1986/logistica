<nav class="navbar navbar-expand-md navbar-dark bg-dark">  
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    Web
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#secondNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="secondNavbar">
                    <ul class="navbar-nav ml-auto">
                        
                        <!--menú PEDIDOS-->
                        <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                           Pedidos
                        </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Clientes</a>
                                <a href="#" class="dropdown-item">Pedidos</a>
                                <a href="#" class="dropdown-item">Panel</a>                                
                            </div>
                        </li>    
                        
                        <!--menú ENTREGAS-->
                        <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                           Reparto
                        </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Asignar repartos</a>
                                <a href="#" class="dropdown-item">Imprimir cargas</a>
                                <a href="#" class="dropdown-item">Registrar repartos</a>
                                <a href="#" class="dropdown-item">Zonas de reparto</a> 
                                <a href="#" class="dropdown-item">Choferes</a> 
                                
                            </div>
                        </li>    
                        
                       
                        <!--menú INVENTARIO-->
                        <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                           Inventario
                        </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Ingresar mercaderia</a>
                                <a href="#" class="dropdown-item">Control de stock</a>
                                <a href="#" class="dropdown-item">Reporte stock crítico</a>                      
                            </div>
                        </li>    
                                                
                        
                        <!--menú con Compras-->
                        <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Compras
                        </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Productos</a>
                                <a href="#" class="dropdown-item">Categorias</a>
                                <a href="#" class="dropdown-item">Marcas</a>
                                <a href="#" class="dropdown-item">Proveedores</a>
                            </div>
                        </li>  
                        
                         <!--menú Usuarios-->
                        <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            Usuarios
                        </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Usuarios</a>
                                <a href="<?=base_url?>usuarios" class="dropdown-item">Registrar Nuevo</a>
                                <a href="#" class="dropdown-item">Rol de Usuario</a>                                
                            </div>
                        </li>  
                        
                        <li class="nav-item"><a class="nav-link" href="<?=base_url?>logout.php">Cerrar Sesión</a></li>  
                    </ul>
                </div>
            </div>
        </nav>     
