<?php

include ("plantillas/plantilla.php");
include ("config/db.php");

$sql="SELECT * FROM cliente";
$resultado=mysqli_query($coon,$sql);

$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,10,'Tabla de clientes',1,1,'C',1);
$pdf->Cell(40,10,'ID',1,0,'C',1);
$pdf->Cell(100,10,'nombre de cliente',1,0,'C',1);
$pdf->Cell(60,10,'apellido de cliente',1,0,'C',1);
$pdf->Cell(80,10,'cedula de cliente',1,1,'C',1);

$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
    $pdf->Cell(40,10,($row['ID_clie']),1,0,'C',1);
	$pdf->Cell(100,10,utf8_decode($row['name_clie']),1,0,'C',1);
	$pdf->Cell(60,10,utf8_decode($row['apel_clie']),1,0,'C',1);
    $pdf->Cell(80,10,utf8_decode($row['cedu_clie']),1,1,'C',1);
}
$pdf->Output();


?>