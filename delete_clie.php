<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM cliente WHERE ID_clie = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: clientes.php");
    
}else {
    die(mysqli_error($coon));
}

?>