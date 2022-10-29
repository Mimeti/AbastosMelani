<?php

include("config/db.php");

$ID_asi=$_GET['id'];

$sql="DELETE FROM user WHERE ID_user = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);

if($resultado == 1){
    Header("Location: user.php");
    
}else {
    die(mysqli_error($coon));
}

?>