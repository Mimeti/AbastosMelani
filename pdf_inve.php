<?php

include ("plantillas/plantilla.php");
include ("config/db.php");

$sql="SELECT * FROM inventario";
$resultado=mysqli_query($coon,$sql);

$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,10,'Tabla de inventario',1,1,'C',1);
$pdf->Cell(20,10,'ID',1,0,'C',1);
$pdf->Cell(50,10,'producto',1,0,'C',1);
$pdf->Cell(50,10,'fecha de ingreso',1,0,'C',1);
$pdf->Cell(40,10,'caducidad',1,0,'C',1);
$pdf->Cell(60,10,'en almacenamiento',1,0,'C',1);
$pdf->Cell(60,10,'precio',1,1,'C',1);


$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
    $pdf->Cell(20,10,($row['ID_inve']),1,0,'C',1);
	$pdf->Cell(50,10,utf8_decode($row['name_inve']),1,0,'C',1);
	$pdf->Cell(50,10,utf8_decode($row['date_inve']),1,0,'C',1);
    $pdf->Cell(40,10,utf8_decode($row['cadu_inve']),1,0,'C',1);
    $pdf->Cell(60,10,utf8_decode($row['alma_inve']),1,0,'C',1);
    $pdf->Cell(60,10,utf8_decode($row['prec_inve']),1,1,'C',1);
    
}
$pdf->Output();


?>
