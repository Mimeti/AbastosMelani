<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_menu.css">
    <link rel="stylesheet" href="css/estilo_tablas.css">
    <link rel="stylesheet" href="css/icon.css">
    
    <title>Abastos Melani</title>
</head>
<body>
<header class="content_header">
        <nav class="content_nav">
            <a href=""><img src="img/logo.png" alt="logo" class="nav_logo"></a>
            <div href="" class="nav_titulo">AbastosMelani</div>
            <ul class="nav_menu">
                <li class="nav_menu_item">
                    <a href="formu_clie.php" class="nav_menu_link nav_link">Añadir cliente</a>
                </li>
                <li class="nav_menu_item">
                    <a href="inventario.php" class="nav_menu_link nav_link">Inventario</a>
                </li>
                <li class="nav_menu_item">
                    <a href="inve_menu.php" class="nav_menu_link nav_link">volver</a>
                </li>
                
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="" class="nav_respon_link nav_link"><span class="icon icon-home"> inicio</span></a>
                </li>
                <li class="nav_respon_item">
                    <a href="" class="nav_respon_link nav_link"><span class="icon icon-folder-open"> inventario</span></a>
                </li>
                <li class="nav_respon_item1">
                    <a href="" class="nav_respon_link nav_link"><span class="icon icon-cog"> bitacora</span></a>
                </li>
            </ul>
        </nav>
    </header>


        <div><a href="pdf_inve.php">imprimir tabla</a></div>
    </div>

    
  
<div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
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
                <td><?php  echo $row['ID_clie']?></td>
                <td><?php  echo $row['name_clie']?></td>
                <td><?php  echo $row['apel_clie']?></td>
                <td><?php  echo $row['cedu_clie']?></td>
                <td><a class="form-control btn submit" href="updatenom.php?id=<?php echo $row['ID_clie'] ?>" >Editar</a></td>
                <td><a class="form-control btn submit" href="delete_clie.php?id=<?php echo $row['ID_clie'] ?>" >Eliminar</a></td>
            </tr>
                    
            <?php
                }
            }
            ?>
    </tbody>
</table>     
</div>
    