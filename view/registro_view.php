<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos_menu.css">
    <link rel="stylesheet" href="css/estilos_invea.css">
    <link rel="stylesheet" href="css/icon.css">
    <title>Abastos Melani</title>
</head>
<body>


<div class="conten_form">
    <form class="form" action="productos/ingresar_inve.php" method="post">
        <div class="form_fondo"><span class="icon icon-folder-open"> ingresar datos</span>
            <div class="form_div">
                <div class="form_div-con">
                    <label><span class="icon icon-folder-plus"> Nombre de usuario</span></label>
                    <input type="text" name="name_user" placeholder="Ingresar nombre de usuario">
                </div>
                <div class="form_div-con">
                    <label><span class="icon icon-folder-plus"> Contraseña</span></label>
                    <input type="password" name="cont_user" placeholder="Ingresar una contraseña">
                </div>
            </div>
            <div class="form_div">
                <div class="form_div-con">
                    <label><span class="icon icon-folder-plus"> Correo electronico</span></label>
                    <input type="mail" name="mail_user" placeholder="Ingresar correo electronico">
                </div>
                <div class="form-group mx-sm-4 pt-3 pb-3 ">
                <select class="form-control mb-3" name="ID_rol">   
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
                </div>
            </div>
            <div class="form_div">
                <div class="form_div-con">
                    <input type="submit" name="submit">
                </div>
                <div class="form_div-con">
                    <a href="index_admin.php">volver</a>
                </div>
            </div>
        </div>
    </form>
</div>