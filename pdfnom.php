<?php

include ("plantillas/plantilla.php");
include ("config/db.php");

$sql="SELECT * FROM nomina
INNER JOIN puesto_trabajo ON nomina.ID_pues = puesto_trabajo.ID_pues";

$resultado=mysqli_query($coon,$sql);

$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,10,'Lista de nominas',1,1,'C',1);
$pdf->Cell(10,10,'ID',1,0,'C',1);
$pdf->Cell(35,10,'Pri. nombre',1,0,'C',1);
$pdf->Cell(40,10,'Seg. nombre',1,0,'C',1);
$pdf->Cell(40,10,'Pri. apellido',1,0,'C',1);
$pdf->Cell(40,10,'Seg. apellido',1,0,'C',1);
$pdf->Cell(20,10,'CI',1,0,'C',1);
$pdf->Cell(30,10,'Numero',1,0,'C',1);
$pdf->Cell(25,10,'Fec. ingr',1,0,'C',1);
$pdf->Cell(20,10,'Puesto',1,0,'C',1);
$pdf->Cell(20,10,'Sueldo',1,1,'C',1);


$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
    $pdf->Cell(10,10,($row['ID_nom']),1,0,'C',1);
	$pdf->Cell(35,10,utf8_decode($row['name_nom']),1,0,'C',1);
	$pdf->Cell(40,10,utf8_decode($row['nameii_nom']),1,0,'C',1);
	$pdf->Cell(40,10,utf8_decode($row['ape_nom']),1,0,'C',1);
	$pdf->Cell(40,10,utf8_decode($row['apeii_nom']),1,0,'C',1);
	$pdf->Cell(20,10,utf8_decode($row['ci_nom']),1,0,'C',1);
    $pdf->Cell(30,10,utf8_decode($row['num_nom']),1,0,'C',1);
    $pdf->Cell(25,10,utf8_decode($row['ingre_nom']),1,0,'C',1);
    $pdf->Cell(20,10,utf8_decode($row['name_pues']),1,0,'C',1);
    $pdf->Cell(20,10,utf8_decode($row['suel_pues']),1,1,'C',1);
}
$pdf->Output();


?>
