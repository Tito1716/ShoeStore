<?php
require_once("../models/database.class.php");
require_once("../libraries/fpdf/fpdf.php");
session_start();


    $query = "SELECT modelo,producto.Cantidad,Precio FROM producto INNER JOIN detalle_pedido On detalle_pedido.Id_producto=producto.Id_producto GROUP by modelo ORDER by producto.Cantidad ASC limit 4";
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
    $pdf->Cell(32,10, 'fecha:',1,0,'C');
    $pdf->Cell(40,10, date('d/m/y'),1,1,'C');
    $pdf->ln(5);
    $pdf->Cell(64,6,'modelo',1,0,'C',1);
    $pdf->Cell(64,6,'cantidad',1,0,'C',1);
    $pdf->Cell(64,6,'precio',1,1,'C',1);
    $pdf->SetFont('Arial','',10);
    
    $pdf->SetAutoPageBreak(true,25);
	
	foreach($resultado as $row)
	{
	    $pdf->Cell(64,6,utf8_decode($row['modelo']),1,0,'C');
        $pdf->Cell(64,6,utf8_decode($row['Cantidad']),1,0,'C');
        $pdf->Cell(64,6,utf8_decode($row['Precio']),1,1,'C');
    }
	$pdf->Output();
?>