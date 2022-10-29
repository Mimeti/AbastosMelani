<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM userdumb WHERE ID_ud = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: userdumb.php");
    
}else {
    die(mysqli_error($coon));
}

?>