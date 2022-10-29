<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM inventario WHERE ID_inve = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: inventario.php");
    
}else {
    die(mysqli_error($coon));
}

?>