<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fomu.css">
    <link rel="stylesheet" href="css/estilos_menu.css">
    <link rel="stylesheet" href="css/notification.css">
    <title>Abastos Melani</title>
</head>
<body>
<header class="content_header">
        <nav class="content_nav">
            <a href=""><img src="img/logo.png" alt="logo" class="nav_logo"></a>
            <div href="" class="nav_titulo">AbastosMelani</div>
            <ul class="nav_menu">
                <li class="nav_menu_item">
                    <a href="inventario.php" class="nav_menu_link nav_link">Volver</a>
                </li>   
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="inventario.php" class="nav_respon_link nav_link"><span class="icon icon-cog"> Volver</span></a>
                </li>
            </ul>
        </nav>
    </header>

    <form action="controlador/updateaddi.php" method="POST" id="form">
        <div class="form">
            <h1>Registro</h1>
            <input type="hidden" name="ID_inve" value="<?php echo $row[0]?>">
            <div class="grupo">
                <input type="date" name="date_inve" id="date_inve" value="<?php echo $row[1]?>" required><span class="barra"></span>
                <label for="date_inve">Fecha de ingreso</label>
            </div>
            <div class="grupo">
                <input type="date" name="cadu_inve" id="cadu_inve" value="<?php echo $row[2]?>" required><span class="barra"></span>
                <label for="cadu_inve">Fecha de caducidad</label>
            </div>
            <div class="grupo">
                <input type="text" name="name_inve" id="name_inve" value="<?php echo $row[3]?>" pattern="[a-zA-ZñÑ]{3,20}"  required><span class="barra"></span>
                <label for="name_inve">Nombre del producto</label>
            </div>
            <div class="grupo">
                <input type="text" name="mark_inve" id="mark_inve" value="<?php echo $row[4]?>" pattern="[a-zA-ZñÑ]{3,20}"  required><span class="barra"></span>
                <label for="mark_inve">Marca del producto</label>
            </div>
            <div class="grupo">
                <input type="int" name="alma_inve" id="alma_inve" value="<?php echo $row[5]?>" required><span class="barra"></span>
                <label for="alma_inve">Almacenado</label>
            </div>
            <div class="grupo">
                <input type="int" name="prec_inve" id="prec_inve" value="<?php echo $row[6]?>"  required><span class="barra"></span>
                <label for="prec_inve">Precio del producto</label>
            </div>         
            <button type="submit">Ingresar</button>
        </div>
    </form>
    <script src="main.js"></script>

</form>
    </div>
</div>