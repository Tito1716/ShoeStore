<?php
require_once("../app/models/detalle_pedido.class.php");
require_once("../app/models/pedido.class.php");
try{
    $detalle = new detalle;//Try con la funcion de buscar
    $pedido = new pedido;
            if(isset($_POST['terminar'])){  
                if($pedido->getMaxPedido()){	
                    if($pedido->TerminarCompra()){  
                        Page::showMessage(1, "Compra realizada","../app/reportes/factura.php");
                        $data = $detalle->getCarrito();    
                    }else{
                        throw new Exception(Database::getException());
                    }
                }else{
                    throw new Exception("Error en el pedido");
                }    
            }else{
                $data = $detalle->getCarrito();
            }
    
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "descripcion_view.php");
}
require_once("../app/views/public/zapatos/carrito_view.php"); //se llama la vista de del index de productos
?>
