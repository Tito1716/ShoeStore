<?php
class pedido extends Validator{
    private $id_pedido = null;
    private $cliente = null; 
    private $total_pago = null;

    public function setId_pedido($value){
		if($this->validateId($value)){
			$this->id_pedido = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_pedido(){
		return $this->id_pedido;
    }

    public function setCliente($value){
		if($this->validateId($value)){
			$this->cliente = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCliente(){
		return $this->cliente;
    }

    public function setTotal_pago($value){
		if($this->validateMoney($value)){
			$this->total_pago = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTotal_pago(){
		return $this->total_pago;
    }

    public function createPedido(){
		$sql = "SELECT id_pedido FROM pedidos WHERE Id_estado = 1 AND id_cliente = ?";
		$params = array($_SESSION['Id_cliente']);
		$pedido = Database::getRow($sql, $params);
		if($pedido){
			$_SESSION['id_pedido'] = $pedido['id_pedido'];
		}else{
			$sql = "INSERT INTO pedidos(id_cliente, id_estado) VALUES (?, 1)";
			$params = array($this->cliente);	
			if(Database::executeRow($sql, $params)){
				$_SESSION['id_pedido'] = Database::getLastRowId();
			}else{
				return false;
			}
		}
		return true;
		}
		
		public function updatePedido(){
			$sql = "UPDATE pedidos SET estado_pedido = 2, total_pago = ? WHERE id_pedido = ?";
			$params = array($this->total_pago, $this->id);
			return Database::executeRow($sql, $params);
			}
			
			
		public function getMaxPedido(){
			$sql = "SELECT MAX(id_pedido) as ultimo FROM pedidos";
			$params = array(null);
			$pedido = Database::getRow($sql, $params);
			return $pedido['ultimo'];	
			}

			public function getTotal(){
				$sql = "SELECT SUM(subtotal)  FROM detalle_pedido WHERE id_pedido = ? ";
				$params = array($_SESSION['id_pedido']);
				$total = Database::getRow($sql, $params);
				}

		public function TerminarCompra(){
			$sql = "SELECT SUM(subtotal)  as total FROM detalle_pedido WHERE Id_pedido = ?";
			$params = array($_SESSION['id_pedido']);
			$total = Database::getRow($sql, $params);
			$sql = "UPDATE pedidos SET total_pago = ?, Id_estado = 2 WHERE Id_pedido = ?";
			$params = array($total['total'], $_SESSION['id_pedido']);
			return Database::executeRow($sql, $params);
			}

		

				

}
?>