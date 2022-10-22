<div>
        <div class="titulo_inve"><span class="icon icon-database">  Nomina</span></div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Primer nombre</th>
                    <th>Segundo nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Cedula</th>
                    <th>Numero telefonico</th>
                    <th>Fecha de ingreso</th>
                    <th>Puesto de trabajo</th>
                    <th>Suelda</th>
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
                <td><?php  echo $row['ID_nom']?></td>
                <td><?php  echo $row['name_nom']?></td>
                <td><?php  echo $row['nameii_nom']?></td>
                <td><?php  echo $row['ape_nom']?></td>
                <td><?php  echo $row['apeii_nom']?></td>
                <td><?php  echo $row['ci_nom']?></td>
                <td><?php  echo $row['num_nom']?></td>
                <td><?php  echo $row['ingre_nom']?></td>
                <td><?php  echo $row['name_pues']?></td>
                <td><?php  echo $row['suel_pues']?></td>
                <td><a class="form-control btn submit" href="updatenom.php?id=<?php echo $row['ID_nom'] ?>" >Editar</a></td>
                <td><a class="form-control btn submit" href="deletenom.php?id=<?php echo $row['ID_nom'] ?>" >Eliminar</a></td>
            </tr>
                    
            <?php
                        }
                    }
            ?>
            </tbody>
        </table>
        <div><a href="pdf_inve.php">imprimir tabla</a></div>
    </div>