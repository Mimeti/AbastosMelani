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
                    <a href="formu_produ.php" class="nav_menu_link nav_link">Añadir producto</a>
                </li>
                <li class="nav_menu_item">
                    <a href="clientes.php" class="nav_menu_link nav_link">Clientes</a>
                </li>
                <li class="nav_menu_item">
                    <a href="inve_menu.php" class="nav_menu_link nav_link">volver</a>
                </li>
                
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="formu_produ.php" class="nav_respon_link nav_link"><span class="icon icon-home"> Añadir producto</span></a>
                </li>
                <li class="nav_respon_item">
                    <a href="clientes.php" class="nav_respon_link nav_link"><span class="icon icon-folder-open"> Clientes</span></a>
                </li>
                <li class="nav_respon_item1">
                    <a href="inve_menu.php" class="nav_respon_link nav_link"><span class="icon icon-cog"> bitacora</span></a>
                </li>
            </ul>
        </nav>
    </header>

<div class="table-wrapper">
        <table class="fl-table">
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
                <td><a class="edit" href="updateinve.php?id=<?php echo $row['ID_inve'] ?>" >Editar</a></td>
                <td><a class="delete" href="delete_inve.php?id=<?php echo $row['ID_inve'] ?>" >Eliminar</a></td>
            </tr>
                    
            <?php
                }
            }
            ?>
    </tbody>
</table>     
</div>

<br>
<center><a class="ass" href="pdf_inve.php">Imprimir reporte</a></center>
<br>
    