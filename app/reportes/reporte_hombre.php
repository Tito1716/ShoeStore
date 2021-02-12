<?php
require_once("../models/database.class.php");
require_once("../libraries/fpdf/fpdf.php");
session_start();

    $query = "SELECT Id_producto,Marca,modelo,Cantidad,Precio,Genero from producto INNER JOIN tipo_producto ON tipo_producto.Id_tipo_p=producto.tipo_producto_p AND producto.tipo_producto_p=1";
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
    $pdf->Cell(64,10, 'Usuario:'.$_SESSION['Usuario'],1,0,'C');
    $pdf->Cell(64,10, 'fecha:'.date('d/m/y'),1,0,'C');
    $pdf->Cell(64,10, 'hora:'.date('g:ia'),1,0,'C');
    $pdf->ln(15);
    $pdf->Cell(32,6,'Id producto',1,0,'C',1);
    $pdf->Cell(32,6,'Marca',1,0,'C',1);
    $pdf->Cell(32,6,'Modelo',1,0,'C',1);
    $pdf->Cell(32,6,'Cantidad',1,0,'C',1);
    $pdf->Cell(32,6,'Precio',1,0,'C',1);
    $pdf->Cell(32,6,'Genero',1,1,'C',1);
    $pdf->SetFont('Arial','',10);
    
    $pdf->SetAutoPageBreak(true,25);
	
	foreach($resultado as $row)
	{
		$pdf->Cell(32,6,utf8_decode($row['Id_producto']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['Marca']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['modelo']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['Cantidad']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['Precio']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['Genero']),1,1,'C');

	}
	$pdf->Output();
?>