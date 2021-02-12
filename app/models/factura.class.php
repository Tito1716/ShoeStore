<?php
class factura{
   
public function Productos_llevar(){
				$sql = "SELECT MAX(id_pedido) as ultimo FROM pedidos";
				$params = array(null);
				$pedido = Database::getRow($sql, $params);
				$sql = "SELECT id_producto, pr.modelo  from detalle_pedido, producto pr where id_pedido = ?";
				$params = array($pedido['ultimo']);
				return Database::executeRow($sql, $params);
				}

public function Total_llevar(){
                $sql = "SELECT MAX(id_pedido) as ultimo FROM pedidos";
                $params = array(null);
                $pedido = Database::getRow($sql, $params);
                $sql = "SELECT total_pago from pedidos WHERE id_pedido = ?";
                $params = array($pedido['ultimo']);
                return Database::executeRow($sql, $params);
                }


                public function getDetalleFactura(){
                    $sql = "SELECT MAX(id_pedido) as ultimo FROM pedidos";
				    $params = array(null);
				    $pedido = Database::getRow($sql, $params);
                    $sql = "SELECT d.cantidad, m.modelo, m.Precio, d.subtotal, p.total_pago FROM detalle_pedido d, pedidos p, producto m WHERE d.id_pedido = ? AND d.id_pedido = p.id_pedido AND m.id_producto = d.id_producto";
                    $params = array($pedido['ultimo']);
                    return Database::getRows($sql, $params);
                }
            }
    
            ?>