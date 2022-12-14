<?php

require 'fpdf/fpdf.php';

class PDF extends FPDF
{
    function Header()
    {
        $this->Image('img/logo.png', 0, 6, 65 );
        $this->SetFont('Arial','I',14);
        $this->Cell(55);
        $this->Cell(200,10, 'PROPIETARIO: Marleny Velandia P.',0,0,'C');
        $this->SetFont('Arial','B',20);
        $this->Cell(-202,20, 'ABASTO MELANI M.R.V VELANDIA',0,0,'C');
        $this->SetFont('Arial','I',12);
        $this->Cell(202,30, 'Barrio Buenos Aires Calle Principal Casa #1-71 Santa Ana Municipio Cordoba Del Estado Tachira',0,0,'C');
        $this->Cell(-202,40, 'RIF: 14605738-8',0,0,'C');
        $this->SetFillColor(65, 105, 225);
        $this->SetTextColor(225);
        $this->SetDrawColor(225);
        $this->Ln(50);
        $this->Cell(100,10, 'Datos de Administrador',1,0,'C',1);
        $this->Cell(80,10, '  ',0,0,'C');
        $this->SetFillColor(65, 105, 225);
        $this->Cell(100,10, 'Firmas',1,1,'C',1);
        $this->SetFillColor(105, 150, 225);
        $this->Cell(100,10, 'Nombre: AbastosMelani telefono: 04147279363',1,0,'C',1);
        $this->Cell(80,10, '  ',0,0,'C');
        $this->Cell(100,10, 'cliente:_________ Empleado:________ ',1,0,'C',1);
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetFillColor(165, 105, 225);
        $this->SetTextColor(000);
        $this->SetDrawColor(150);
        $this->SetY(-15);
        $this->SetTextColor(0);
		$this->Cell(100,10, 'NO HAY DEVOLUCIONES',0,0,'C',1);
        $this->Cell(100,10, $date= date('Y-d-m'),0,0,'C',1);
    }
}

?>