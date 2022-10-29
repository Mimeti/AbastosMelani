<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM inventariodumb WHERE ID_id = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: invedumb.php");
    
}else {
    die(mysqli_error($coon));
}

?>