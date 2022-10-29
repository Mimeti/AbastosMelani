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
                    <a href="user.php" class="nav_menu_link nav_link">Volver</a>
                </li>
                
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="user.php" class="nav_respon_link nav_link"><span class="icon icon-home">Volver</span></a>
                </li>
            </ul>
        </nav>
    </header>


<form action="controlador/ingresar_user.php" method="POST" id="form">
        <div class="form">
            <h1>Registro</h1>
            <div class="grupo">
                <input type="text" name="name_user" id="name_user" pattern="[a-zA-ZñÑ]{3,20}"  required><span class="barra"></span>
                <label for="name_user">Nombre de usuario</label>
            </div>
            <div class="grupo">
                <input type="password" name="cont_user" id="cont_user"  required><span class="barra"></span>
                <label for="cont_user">Contraseña</label>
            </div>
            <div class="grupo">
                <input type="mail" name="mail_user" id="mail_user" pattern="[a-zA-ZñÑ@._]{3,20}" required><span class="barra"></span>
                <label for="mail_user">Correo electronico</label>
            </div>
             <div class="grupo">
                <label for="ID_pues">Tipo de usuario</label>
                <select class="barra" name="ID_rol" id="ID_rol">   
                    <?php 
                 
                        while($row = mysqli_fetch_array($datos)){

                            $ID_rol = $row['ID_rol'];
                            $rol = $row['name_rol'];
                            
                    ?>
                      <option value="<?php echo $ID_rol; ?>"><?php echo $rol;?></option>
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