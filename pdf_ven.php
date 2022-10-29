<?php
include ("plantillas/plantilla.php");
include ("config/db.php");

$sql1="SELECT * FROM venta INNER JOIN inventario  
ON venta.ID_inve = inventario.ID_inve";
$resultado1=mysqli_query($coon,$sql1);

$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,10,'ventas',1,1,'C',1);
$pdf->Cell(30,10,'codigo',1,0,'C',1);
$pdf->Cell(50,10,'inventario',1,0,'C',1);
$pdf->Cell(40,10,'marca',1,0,'C',1);
$pdf->Cell(80,10,'cantidad',1,0,'C',1);
$pdf->Cell(80,10,'venta',1,1,'C',1);

$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($rows = $resultado1->fetch_assoc())
{
    $pdf->Cell(30,10,($rows['codi_fact']),1,0,'C',1);
	$pdf->Cell(50,10,utf8_decode($rows['name_inve']),1,0,'C',1);
    $pdf->Cell(40,10,utf8_decode($rows['mark_inve']),1,0,'C',1);
    $pdf->Cell(80,10,utf8_decode($rows['cant_ven']),1,0,'C',1);
	$pdf->Cell(80,10,utf8_decode($rows['total_ven']),1,1,'C',1);
}
$pdf->Output();
?>