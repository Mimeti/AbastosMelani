<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM nomina WHERE ID_nom = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: nomina.php");
    
}else {
    die(mysqli_error($coon));
}


?>