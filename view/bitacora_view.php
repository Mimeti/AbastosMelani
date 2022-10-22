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
                    <a href="pdfbit.php" class="nav_menu_link nav_link">Imprimir</a>
                </li>
                <li class="nav_menu_item">
                    <a href="papelera.php" class="nav_menu_link nav_link">Papelera</a>
                </li>
                <li class="nav_menu_item">
                    <a href="index_admin.php" class="nav_menu_link nav_link">Volver</a>
                </li>
                
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="" class="nav_respon_link nav_link"><span class="icon icon-home"> Imprimir</span></a>
                </li>
                <li class="nav_respon_item">
                    <a href="" class="nav_respon_link nav_link"><span class="icon icon-folder-open"> Papelera</span></a>
                </li>
                <li class="nav_respon_item1">
                    <a href="" class="nav_respon_link nav_link"><span class="icon icon-cog"> Volver</span></a>
                </li>
            </ul>
        </nav>
    </header>



<div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Host</th>
                    <th>Fecha de la Operacion</th>
                    <th>Modulo</th>
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
                <td><?php  echo $row['id_bit']?></td>
                <td><?php  echo $row['oper_bit']?></td>
                <td><?php  echo $row['host_bit']?></td>
                <td><?php  echo $row['modi_bit']?></td>
                <td><?php  echo $row['tabla_bit']?></td>
            <?php
                }
            }
            ?>
    </tbody>
</table>     
</div>