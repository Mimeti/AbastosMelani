<?php

require 'fpdf/fpdf.php';

class PDF extends FPDF
{
    function Header()
    {
        $this->Image('img/logo.jpg', 0, 6, 65 );
        $this->SetFont('Arial','I',14);
        $this->Cell(55);
        $this->Cell(200,10, 'PROPIETARIO: Marleny Velandia P.',0,0,'C');
        $this->SetFont('Arial','B',20);
        $this->Cell(-202,20, 'ABASTO MELANI M.R.V VELANDIA',0,0,'C');
        $this->SetFont('Arial','I',12);
        $this->Cell(202,30, 'Barrio Buenos Aires Calle Principal Casa #1-71 Santa Ana Municipio Cordoba Del Estado Tachira',0,0,'C');
        $this->Cell(-202,40, 'RIF: 14605738-8',0,0,'C');
        $this->SetFont('Arial','B',30);
        $this->SetTextColor(65, 105, 225);
        $this->Cell(180,90, 'Lista de empleados',0,0,'C');
        $this->Ln(60);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetTextColor(0);
		$this->SetFont('Arial','I', 8);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
    }
}

?>