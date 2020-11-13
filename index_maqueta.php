<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Sistema de Gestión Logístico</title>
        <link rel="stylesheet" href="css/styles.css"/

    </head>
    <body>
        <div id="container">
            <!--Cabecera-->
            <header id="header">
                <div id="logo">
                    <img src="images/logo.jpg" alt="Logo empresa"/>
                    <a href="index.php">
                        Sistema de Gestión Logística
                    </a>

                </div>
            </header>    


            <!--Menu-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>                   
                    </li>
                    <li>
                        <a href="#">Registrar Pedido</a>
                    </li>
                    <li>
                        <a href="#">Asignar Reparto</a>                   
                    </li>
                    <li>
                        <a href="#">Registrar Ingresos</a>                   
                    </li>
                    <li>
                        <a href="#">Transferir Productos</a>                   
                    </li>
                    <li>
                        <a href="#">Ajustes Stocks</a>                   
                    </li>
                    <li>
                        <a href="#">Comprar Productos</a>                   
                    </li>
                     <li>
                        <a href="#">Inventario</a>                   
                    </li>
                </ul>
            </nav>


            <div id="content">
                <!--Barra lateral-->
                <aside id="lateral">

                    <div id="login" class="block_aside">
                        <h3>Entrar a la Web</h3>
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>

                            <label for="password">Password</label>
                            <input type="password" name="password"/>  

                            <input type="submit" value="Enviar"/>
                        </form>
                        
                        <ul>
                            <li><a href="#">Pedidos de clientes</a></li>
                            <li><a href="#">Gestionar repartos</a></li>
                            <li><a href="#">Gestionar stocks</a></li>
                        </ul>  
                    </div>

                </aside> 

                <!--Contenido Central-->
                <div id="central">
                    <h1>Gestión de Inventarios</h1>

                    <div class="producto"/>
                    <img src=""/>
                    </div>       
                </div>
            
            </div>
            
              <!--Pie de Pagina-->            
           <footer id="pie">
                <p>Desarrollado por CRR &copy; <?=date('Y') ?></p>
           </footer>            
        </div>             
    </body>    
</html>
