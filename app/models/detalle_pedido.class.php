<?php
class detalle extends Validator{
    //Declaración de propiedades
    private $id = null;
    private $pedido = null;
    private $cantidad = null;
    private $subtotal = null;
    private $existencias = null;
    private $productoId = null;

    //Métodos para sobrecarga de propiedades
    public function setId_detalle($value){
		if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
    }
    public function getId_detalle(){
		return $this->id;
    }

    public function setPedido($value){
		if($this->validateId($value)){
			$this->pedido = $value;
			return true;
		}else{
			return false;
		}
    }
    public function getPedido(){
		return $this->pedido;
    }

    public function setCantidad($value){
		if($this->validateId($value)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->cantidad;
    }

    public function setSubtotal($value){
		if($this->validateMoney($value)){
			$this->subtotal = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getSubtotal(){
		return $this->subtotal;
    }

    public function setExistencias($value){
		if($this->validateId($value)){
			$this->existencias = $value;
			return true;
		}else{
			return false;
		}
    }
    public function getExistencias(){
		return $this->existencias;
		}
		
		public function setproductoID($value){
			if($this->validateId($value)){
				$this->productoId = $value;
				return true;
			}else{
				return false;
			}
			}
			public function getproductoID(){
			return $this->productoId;
			}

    //Metodos para manejar el CRUD
    public function createDetalle(){
		$sql = "INSERT INTO detalle_pedido(Id_pedido, Id_producto, cantidad, subtotal) VALUES (?, ?, ?, ?)";
		$params = array($this->pedido, $this->productoId, $this->cantidad, $this->subtotal);
		return Database::executeRow($sql, $params);
    }

    public function getCarrito(){
		$sql = "SELECT  pr.modelo, pr.Precio, d.cantidad, d.subtotal FROM detalle_pedido d, pedidos p, cliente c, producto pr WHERE p.id_cliente = ? AND d.Id_pedido = p.Id_pedido AND d.Id_producto = pr.Id_producto AND p.id_cliente = c.Id_cliente AND p.Id_estado = 1 ORDER BY pr.modelo";
		$params = array($_SESSION['Id_cliente']);
		return Database::getRows($sql, $params);
    }

    public function updateCantidadLlevar(){
		$sql = "UPDATE detalle_pedido SET cantidad = ?, subtotal = ? WHERE Id_detalle = ?";
		$params = array($this->cantidad, $this->subtotal, $this->id);
		return Database::executeRow($sql, $params);
    }

    public function deleteDetalle(){
		$sql = "DELETE FROM detalle_pedido WHERE Id_detalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
		}

		public function getPrecios(){
			$sql = "SELECT Precio FROM producto WHERE Id_producto = ?";
			$params = array($this->productoId);
			return Database::getRow($sql, $params);
			}
			
			
}
?>