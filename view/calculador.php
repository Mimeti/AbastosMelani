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

    <form action="calcular.php" method="POST" id="form">
        <div class="form">
            <h1>Registro</h1>
            <input type="hidden" name="ID_nom" value="<?php echo $row[0]?>">
            <input type="hidden" name="name_nom" value="<?php echo $row[1]?>">
            <input type="hidden" name="nameii_nom" value="<?php echo $row[2]?>">
            <input type="hidden" name="ape_nom" value="<?php echo $row[3]?>">
            <input type="hidden" name="apeii_nom" value="<?php echo $row[4]?>">
            <input type="hidden" name="ci_nom" value="<?php echo $row[5]?>">
            <input type="hidden" name="num_nom" value="<?php echo $row[6]?>">
            <input type="hidden" name="ingre_nom" value="<?php echo $row[7]?>">
            <input type="hidden" name="ID_pues" value="<?php echo $row[8]?>">

            <div class="grupo">
                <input type="int" name="dedu" id="dedu" required><span class="barra"></span>
                <label for="dedu">Ingresar numero de dias que falto al trabajo</label>
            </div>
            <div class="grupo">
                <input type="int" name="bono" id="bono" required><span class="barra"></span>
                <label for="bono">Ingresar el numero de horas extra que realizo</label>
            </div>          
            <button type="submit">Ingresar</button>
        </div>
    </form>
    <script src="main.js"></script>

</form>
    </div>
</div>