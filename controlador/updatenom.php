
<?php include('config/db.php');

$ID_pues=$_POST['ID_pues'];
$ID_nom=$_POST['ID_nom'];
$name_nom=$_POST['name_nom'];
$nameii_nom=$_POST['nameii_nom'];
$ape_nom=$_POST['ape_nom'];
$apeii_nom=$_POST['apeii_nom'];
$ci_nom=$_POST['ci_nom'];
$num_nom=$_POST['num_nom'];
$ingre_nom=$_POST['ingre_nom'];



$sql1="UPDATE nomina SET ID_nom='$ID_nom', name_nom='$name_nom', nameii_nom='$nameii_nom', ape_nom='$ape_nom',
 apeii_nom='$apeii_nom', ci_nom='$ci_nom', num_nom='$num_nom', ingre_nom='$ingre_nom', ID_pues='$ID_pues' WHERE ID_nom = '$ID_nom'";
$query1= mysqli_query($coon,$sql1);


if($query1 == 1){
    Header("Location: nomina.php");
    
}else {
    die(mysqli_error($coon));
}
?>