<?php include_once ('config/db.php');

//session_start();

if(isset($_GET['cerrar_sesion'])){
    session_unset(); 

    // destroy the session 
    session_destroy(); 
}

if(isset($_SESSION['ID_rol'])){
    switch($_SESSION['ID_rol']){
        case 1:
            header('location: Index_admin.php');
        break;

        case 2:
        header('location: gerente.php');
        break;

        case 3:
        header('location: empleado.php');
        break;

        default:
    }
}

if(isset($_POST['name_user']) && isset($_POST['cont_user'])){
    $name_user = $_POST['name_user'];
    $cont_user = $_POST['cont_user'];
    $errores = '';

    $query="SELECT * FROM user WHERE name_user = '$name_user' AND cont_user = '$cont_user'";
    
    $resultado=mysqli_query($coon,$query);

    $row=mysqli_fetch_array($resultado);
    if($row == TRUE){

        $ID_rol = $row[4];

        $_SESSION['ID_rol'] = $ID_rol;

        switch($_SESSION['ID_rol']){
            case 1:
                header('location: Index_admin.php');
            break;
    
            case 2:
            header('location: index_gerente.php');
            break;
    
            case 3:
            header('location: index_empleado.php');
            break;
    
            default:
                
        }

    }else{

        $errores .= 'Nombre de usuario o contraseña incorrectos';
    }  
}

include('view/login_view.php');