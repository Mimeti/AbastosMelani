<?php
include ("plantillas/plantilla_fact.php");
include ("config/db.php");

$ID_asi=$_GET['id'];

$sql="SELECT * FROM facturas INNER JOIN cliente 
ON facturas.ID_clie = cliente.ID_clie WHERE ID_fact = '$ID_asi'";
$resultado=mysqli_query($coon,$sql);


$pdf=new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(148, 79, 226);
$pdf->SetTextColor(225);
$pdf->SetDrawColor(255);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(280,10,'factura',1,1,'C',1);
$pdf->Cell(80,10,'fecha',1,0,'C',1);
$pdf->Cell(60,10,'codigo',1,0,'C',1);
$pdf->Cell(70,10,'cedula',1,0,'C',1);
$pdf->Cell(70,10,'total',1,1,'C',1);

$pdf->SetFillColor(221, 221, 221);
$pdf->SetTextColor(000);
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
$pdf->Cell(80,10,($row['date_fact']),1,0,'C',1);
$pdf->Cell(60,10,utf8_decode($codi_fact = $row['codi_fact']),1,0,'C',1);
$pdf->Cell(70,10,utf8_decode($row['cedu_clie']),1,0,'C',1);
$pdf->Cell(70,10,utf8_decode($row['tota_fact']),1,1,'C',1);
}

$pdf->Ln(10);

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

$sql1="SELECT * FROM venta INNER JOIN inventario  
ON venta.ID_inve = inventario.ID_inve WHERE codi_fact = '$codi_fact'";
$resultado1=mysqli_query($coon,$sql1);

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