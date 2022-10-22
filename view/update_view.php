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
                    <a href="add_job.php" class="nav_menu_link nav_link">Añadir empleo</a>
                </li>
                <li class="nav_menu_item">
                    <a href="nomina.php" class="nav_menu_link nav_link">volver</a>
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

    <form action="controlador/updatenom.php" method="POST" id="form">
        <div class="form">
            <h1>Registro</h1>
            <input type="hidden" name="ID_nom" value="<?php echo $row['ID_nom']?>">
            <div class="grupo">
                <input type="text" name="name_nom" id="name_nom" value="<?php echo $row['name_nom']?>" required><span class="barra"></span>
                <label for="name_nom">Primer nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="nameii_nom" id="nameii_nom" value="<?php echo $row['nameii_nom']?>" required><span class="barra"></span>
                <label for="nameii_nom">Segundo nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="ape_nom" id="ape_nom" value="<?php echo $row['ape_nom']?>" required><span class="barra"></span>
                <label for="ape_nom">Primer apellido</label>
            </div>
            <div class="grupo">
                <input type="text" name="apeii_nom" id="apeii_nom" value="<?php echo $row['apeii_nom']?>" required><span class="barra"></span>
                <label for="apeii_nom">Segundo apellido</label>
            </div>
            <div class="grupo">
                <input type="int" name="ci_nom" id="ci_nom" value="<?php echo $row['ci_nom']?>" required><span class="barra"></span>
                <label for="ci_nom">Cedula de identidad</label>
            </div>
            <div class="grupo">
                <input type="int" name="num_nom" id="num_nom" value="<?php echo $row['num_nom']?>"  required><span class="barra"></span>
                <label for="num_nom">Numero de telefono</label>
            </div>
            <div class="grupo">
                <input type="date" name="ingre_nom" id="ingre_nom" value="<?php echo $row['ingre_nom']?>" required><span class="barra"></span>
                <label for="ingre_nom">Fecha de ingreso</label>
            </div>
             <div class="grupo">
                <label for="ID_pues">Puesto de trabajo</label>
                <select class="barra" name="ID_pues" id="ID_pues">   
                    <?php 
                 
                 $gettrabajo1 = "SELECT * FROM puesto_trabajo ORDER BY ID_pues";
                 $gettrabajo2 = mysqli_query($coon,$gettrabajo1);

                 while($row = mysqli_fetch_array($gettrabajo2)){

                            $ID_pues = $row['ID_pues'];
                            $puesto = $row['name_pues'];
                            $sueldo = $row['suel_pues'];

                    ?>
                    <option value="<?php echo $ID_pues; ?>"><?php echo $puesto." ".$sueldo;?></option>
                    <?php
                        }
                    ?>
                </select>
                <span class="barra"></span>  
            </div>
         

            <button type="submit">Ingresar</button>
        </div>
    </form>
    <script src="main.js"></script>

</form>
    </div>
</div>