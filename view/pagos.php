<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_menu.css">
    <link rel="stylesheet" href="css/estilo_tablas.css">
    <link rel="stylesheet" href="css/botone.css">

    <title>Abastos Melani</title>
</head>
<body>


<div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Puesto</th>
                    <th>Sueldo base</th>
                    <th>Descuento por faltas al trabajo</th>
                    <th>Bonos por hora extra</th>
                    <th>Pago total</th>
                    <th>Imprimir</th>
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
                <td><?php  echo $row['ID_pag']?></td>
                <td><?php  echo $row['name_nom']?></td>
                <td><?php  echo $row['name_pues']?></td>
                <td><?php  echo $row['suel_pues']?></td>
                <td><?php  echo $row['dedu_pag']?></td>
                <td><?php  echo $row['bono_pag']?></td>
                <td><?php  echo $row['total_pag']?></td>
                <td><a class="ass" href="pdfpago.php?id=<?php echo $row['ID_pag'] ?>" >Imprimir</a></td>
            </tr>
                    
            <?php
                }
            }
            ?>
    </tbody>
</table>

</div>
<br>
<center><a class="delete" href="controlador/descarte.php">Descartar</a></center>
<br>