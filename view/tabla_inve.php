<div>
        <div class="titulo_inve"><span class="icon icon-database"> Inventario</span></div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>producto</th>
                    <th>marca</th>
                    <th>ingreso</th>
                    <th>caducidad</th>
                    <th>cantidad en almacen</th>
                    <th>precio</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($datos) > 0)  
                {  
                    while($row = mysqli_fetch_array($datos))  
                    { 
            ?>
    
            <tr>
                <td><?php  echo $row['ID_inve']?></td>
                <td><?php  echo $row['name_inve']?></td>
                <td><?php  echo $row['mark_inve']?></td>
                <td><?php  echo $row['date_inve']?></td>
                <td><?php  echo $row['cadu_inve']?></td>
                <td><?php  echo $row['alma_inve']?></td>
                <td><?php  echo $row['prec_inve']?></td>
                <td></td>
                <td></td>
            </tr>
                    
            <?php
                        }
                    }
            ?>
            </tbody>
        </table>
        <div><a href="pdf_inve.php">imprimir tabla</a></div>
    </div>