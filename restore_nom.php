<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM nominadumb WHERE ID_nd = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: nominadumb.php");
    
}else {
    die(mysqli_error($coon));
}

?>