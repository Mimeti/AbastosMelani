<?php

include ("plantillas/plantilla_fact.php");
include ("config/db.php");

$ID_asi=$_GET['id'];

$sql = "SELECT * FROM pago 
INNER JOIN puesto_trabajo ON pago.ID_pues = puesto_trabajo.ID_pues
INNER JOIN nomina ON pago.ID_nom = nomina.ID_nom WHERE ID_pag ='$ID_asi'";

$resultado=mysqli_query($coon,$sql);


$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,10,'Pago',1,1,'C',1);
$pdf->Cell(20,10,'ID',1,0,'C',1);
$pdf->Cell(40,10,'nombre',1,0,'C',1);
$pdf->Cell(40,10,'puesto',1,0,'C',1);
$pdf->Cell(40,10,'sueldo base',1,0,'C',1);
$pdf->Cell(55,10,'Descuento por faltas',1,0,'C',1);
$pdf->Cell(50,10,'Bonos por hora',1,0,'C',1);
$pdf->Cell(35,10,'total',1,1,'C',1);

$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
$pdf->Cell(20,10,($row['ID_nom']),1,0,'C',1);
$pdf->Cell(40,10,utf8_decode($codi_fact = $row['name_nom']),1,0,'C',1);
$pdf->Cell(40,10,utf8_decode($codi_fact = $row['name_pues']),1,0,'C',1);
$pdf->Cell(40,10,utf8_decode($codi_fact = $row['suel_pues']),1,0,'C',1);
$pdf->Cell(55,10,utf8_decode($codi_fact = $row['dedu_pag']),1,0,'C',1);
$pdf->Cell(50,10,utf8_decode($codi_fact = $row['bono_pag']),1,0,'C',1);
$pdf->Cell(35,10,utf8_decode($codi_fact = $row['total_pag']),1,1,'C',1);


}

$pdf->Output();
?>