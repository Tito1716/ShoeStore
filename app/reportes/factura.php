<?php
require_once("../models/database.class.php");
require_once("../libraries/fpdf/fpdf.php");
require_once("../models/factura.class.php");
session_start();
    
$factura = new factura;

$data = $factura->getDetalleFactura();

$query = "SELECT producto.Id_producto,modelo,Precio,detalle_pedido.cantidad,subtotal,total_pago FROM producto INNER JOIN detalle_pedido On detalle_pedido.Id_producto=producto.Id_producto INNER JOIN pedidos";
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
    $pdf->Cell(40,10, 'Usuario:'.$_SESSION['Nombre'],1,0,'C');
    $pdf->Cell(40,10, 'hora:',1,0,'C');
    $pdf->Cell(40,10, date('g:ia'),1,0,'C');
    $pdf->Cell(40,10, 'fecha:',1,0,'C');
    $pdf->Cell(40,10, date('d/m/y'),1,1,'C');
    $pdf->ln(5);
    $pdf->Cell(32,6,'Cantidad:',1,0,'C',1);
    $pdf->Cell(32,6,'Modelo',1,0,'C',1);
    $pdf->Cell(32,6,'Precio',1,0,'C',1);
    
    $pdf->Cell(32,6,'Subtotal',1,0,'C',1);
    $pdf->ln(10);
    $pdf->Cell(32,6,'Total pago',1,1,'C',1);
    $pdf->SetFont('Arial','',10);
    
    $pdf->SetAutoPageBreak(true,25);
	
	foreach($data as $row)
	{
        $pdf->Cell(32,6,utf8_decode($row['cantidad']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['modelo']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['Precio']),1,0,'C');
        $pdf->Cell(32,6,utf8_decode($row['subtotal']),1,0,'C');
        $pdf->ln(10);
        
    

    }
    $pdf->Cell(30,15,utf8_decode("$".$row['total_pago']),1,1,'C');

	$pdf->Output();
?>