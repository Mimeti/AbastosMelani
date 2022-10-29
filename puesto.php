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
                    <a href="nomina.php" class="nav_menu_link nav_link">Volver</a>
                </li>
                
            </ul>
            <button type="buttom" class="nav_buttom" id="nav_buttom"><a href="#" class="nav_link"><span class="icon icon-menu"></span></a></button>
            <ul id="nav_ul" class="nav_respon activado">
                <li class="nav_respon_item1">
                    <a href="nomina.php" class="nav_respon_link nav_link"><span class="icon icon-cog">Volver</span></a>
                </li>
            </ul>
        </nav>
    </header>

    <form action="controlador/ingresar_pues.php" method="POST" id="form">
        <div class="form">
            <h1>Registro</h1>
            <div class="grupo">
                <input type="text" name="name_pues" id="name_pues" pattern="[a-zA-ZñÑ]{3,20}" required><span class="barra"></span>
                <label for="name_pues">Puesto de trabajo</label>
            </div>
            <div class="grupo">
                <input type="int" name="suel_pues" id="suel_pues" required><span class="barra"></span>
                <label for="suel_pues">Sueldo</label>
            </div>
            <button type="submit">Ingresar</button>
        </div>
    </form>
    <script src="main.js"></script>

</form>
    </div>
</div>