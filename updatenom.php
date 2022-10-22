<?php include("config/db.php");

$ID_asi=$_GET['id'];

$sql="SELECT * FROM nomina WHERE ID_nom = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);


if(!empty($resultado)){
    
    $sql="SELECT * FROM nomina
    INNER JOIN puesto_trabajo ON nomina.ID_pues = puesto_trabajo.ID_pues";
    $resultado=mysqli_query($coon,$sql);

    $row=mysqli_fetch_array($resultado);
}



include("view/update_view.php");
?>