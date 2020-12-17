
<h1 align="center">Usuarios</h1>       
<div class="container">
        <table class="table table-bodered table-hover">
            <thead>
                <tr class="info">
                    <th>Usuario</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                
                <?php while($ver = $usuarios->fetch_object()): ?>    
                        
                <tr>
                    <td><?=$ver->nombre; ?></td>
                    <td><?=$ver->email; ?></td>
                </tr>
               
                <?php endwhile; ?>
                
                
            </tbody>
        </table>
</div>


