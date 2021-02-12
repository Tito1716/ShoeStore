<?php
require_once("../models/database.class.php");
require_once("../libraries/fpdf/fpdf.php");
session_start();


    $query = "SELECT Usuario,Apellido,cargo from usuario INNER JOIN tipo_usuario ON tipo_usuario.Id_tipo=usuario.Id_usuario";
    $params = array(null);
    $resultado = Database::getRows($query, $params);

    class ejemplo extends FPDF
    {
        function Footer()
        {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->SetTextColor(128);
        $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
        }
    }
    
  
	
    $pdf = new ejemplo('P','mm','letter');
    $pdf->AliasNbPages();
    $pdf->SetMargins(10,10,10,10);//margenes arriba, abajo, izquierda, derecha
	$pdf->AddPage();
    
    $pdf->SetFillColor(232,232,232);
    $pdf->image('../../web/img/public/slider/l.png', 10,10,40);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(192,14, 'Reporte De Productos por Genero',1,1,'C');
    ini_set("date.timezone","America/El_Salvador");
    $pdf->Cell(40,10, 'Usuario:'.$_SESSION['Usuario'],1,0,'C');
    $pdf->Cell(40,10, 'hora:',1,0,'C');
    $pdf->Cell(40,10, date('g:ia'),1,0,'C');
    $pdf->Cell(40,10, 'fecha:',1,0,'C');
    $pdf->Cell(32,10, date('d/m/y'),1,1,'C');
    $pdf->ln(5);
    $pdf->Cell(55,6,'Usuario',1,0,'C',1);
    $pdf->Cell(55,6,'Apellido',1,0,'C',1);
    $pdf->Cell(55,6,'Cargo',1,1,'C',1);
    $pdf->SetFont('Arial','',10);
    
    $pdf->SetAutoPageBreak(true,25);
	
	foreach($resultado as $row)
	{
		$pdf->Cell(55,6,utf8_decode($row['Usuario']),1,0,'C');
        $pdf->Cell(55,6,utf8_decode($row['Apellido']),1,0,'C');
        $pdf->Cell(55,6,utf8_decode($row['cargo']),1,1,'C');
   	}
	$pdf->Output();
?>