<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM clientedumb WHERE ID_cd = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: cliedumb.php");
    
}else {
    die(mysqli_error($coon));
}

?>