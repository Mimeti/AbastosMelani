<?php

include ("plantillas/plantilla_bit.php");
include ("config/db.php");

$sql="SELECT * FROM bitacora";

$resultado=mysqli_query($coon,$sql);

$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(8,10,'ID',1,0,'C',1);
$pdf->Cell(45,10,'Operacion',1,0,'C',1);
$pdf->Cell(48,10,'Usuario',1,0,'C',1);
$pdf->Cell(50,10,'Host',1,0,'C',1);
$pdf->Cell(48,10,'fecha operacion',1,0,'C',1);
$pdf->Cell(60,10,'Tabla de la operacion',1,1,'C',1);

$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
    $pdf->Cell(8,10,($row['id_bit']),1,0,'C',1);
	$pdf->Cell(45,10,utf8_decode($row['oper_bit']),1,0,'C',1);
	$pdf->Cell(48,10,utf8_decode($row['user_bit']),1,0,'C',1);
	$pdf->Cell(50,10,utf8_decode($row['host_bit']),1,0,'C',1);
	$pdf->Cell(48,10,utf8_decode($row['modi_bit']),1,0,'C',1);
	$pdf->Cell(60,10,utf8_decode($row['tabla_bit']),1,1,'C',1);
}
$pdf->Output();



?>