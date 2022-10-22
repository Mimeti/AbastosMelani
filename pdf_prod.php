<?php

include ("plantillas/plantilla.php");
include ("config/db.php");

$sql="SELECT * FROM producto";
$resultado=mysqli_query($coon,$sql);

$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,10,'Tabla de productos',1,1,'C',1);
$pdf->Cell(40,10,'ID',1,0,'C',1);
$pdf->Cell(100,10,'nombre',1,0,'C',1);
$pdf->Cell(60,10,'marca',1,0,'C',1);
$pdf->Cell(80,10,'codigo de producto',1,1,'C',1);

$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
    $pdf->Cell(40,10,($row['ID_prod']),1,0,'C',1);
	$pdf->Cell(100,10,utf8_decode($row['name_prod']),1,0,'C',1);
	$pdf->Cell(60,10,utf8_decode($row['mark_prod']),1,0,'C',1);
    $pdf->Cell(80,10,utf8_decode($row['codi_prod']),1,1,'C',1);
}
$pdf->Output();


?>