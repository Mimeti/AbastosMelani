<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_menu.css">
    <link rel="stylesheet" href="css/estilo_tablas.css">
    <link rel="stylesheet" href="css/botone.css">
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
                    <a href="add_nom.php" class="nav_menu_link nav_link">Añadir nomina</a>
                </li>
                <li class="nav_menu_item">
                    <a href="puesto.php" class="nav_menu_link nav_link">Añadir empleo</a>
                </li>
                <li class="nav_menu_item">
                    <a href="index_admin.php" class="nav_menu_link nav_link">volver</a>
                </li>
                
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="add_nom" class="nav_respon_link nav_link"><span class="icon icon-folder-open"> Añadir nomina</span></a>
                </li>
                <li class="nav_respon_item">
                    <a href="puesto.php" class="nav_respon_link nav_link"><span class="icon icon-folder-open"> Añadir empleo</span></a>
                </li>
                <li class="nav_respon_item1">
                    <a href="index_admin.php" class="nav_respon_link nav_link"><span class="icon icon-home"> Volver</span></a>
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
                    <th>Puesto de trabajo</th>
                    <th>Sueldo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    <th>Calcular</th>
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
                <td><a class="edit" href="updatenom.php?id=<?php echo $row['ID_nom'] ?>" >Editar</a></td>
                <td><a class="delete" href="delete_nom.php?id=<?php echo $row['ID_nom'] ?>" >Eliminar</a></td>
                <td><a class="ass" href="controlador/calcu.php?id=<?php echo $row['ID_nom'] ?>" >Calcular</a></td>
            </tr>
                    
            <?php
                }
            }
            ?>
    </tbody>
</table>

</div>
<br>
<center><a class="ass" href="pdfnom.php">Imprimir reporte</a></center>
<br>