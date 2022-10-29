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
<header class="content_header">
        <nav class="content_nav">
            <a href=""><img src="img/logo.png" alt="logo" class="nav_logo"></a>
            <div href="" class="nav_titulo">AbastosMelani</div>
            <ul class="nav_menu">
                <li class="nav_menu_item">
                    <a href="papelera.php" class="nav_menu_link nav_link">volver</a>
                </li>
                
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="papelera.php" class="nav_respon_link nav_link"><span class="icon icon-cog"> bitacora</span></a>
                </li>
            </ul>
        </nav>
    </header>



<div class="table-wrapper">
        <table class="fl-table">
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
                    <th>Eliminar</th>
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
                <td><?php  echo $row['ID_nd']?></td>
                <td><?php  echo $row['name_nd']?></td>
                <td><?php  echo $row['nameii_nd']?></td>
                <td><?php  echo $row['ape_nd']?></td>
                <td><?php  echo $row['apeii_nd']?></td>
                <td><?php  echo $row['ci_nd']?></td>
                <td><?php  echo $row['num_nd']?></td>
                <td><?php  echo $row['ingre_nd']?></td>
                <td><a class="edit" href="restore_nom.php?id=<?php echo $row['ID_nd'] ?>" >Eliminar</a></td>
            </tr>
                    
            <?php
                }
            }
            ?>
    </tbody>
</table>     
</div>

<center><a href="controlador/drop_nomd.php" class="delete">Vaciar papelera</a></center>