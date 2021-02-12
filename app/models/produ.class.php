<?php	
class produ extends Validator{
		private $id = null;
		private $id_cliente = null;
    private $marca = null;
    private $cantidad = null;
    private $precio = null;
    private $Id_pro = null;
    private $tipo_p = null;
    private $comen = null;
    private $talla = null;
    private $imagen = null;
		private $modelo = null;
		private $descripcion = null;

    public function setId($value){
        if($this->validateId($value)){
			$this->id = $value;
			return true;
		}else{
			return false;
		}
    }
    public function getId(){
		return $this->id;
		}

		public function setId_produ($value){
			if($this->validateId($value)){
		$this->id = $value;
		return true;
		}else{
			return false;
		}
		}
		public function getId_produ(){
		return $this->id;
		}


    public function setMarca($value){
        if($this->validateAlphabetic($value, 1, 50)){
			$this->marca = $value;
			return true;
		}else{
			return false;
		}
    }
    public function getMarca(){
		return $this->marca;
    }
    public function setCantidad($value){
        if($this->validateAlphanumeric($value, 1, 50)){
			$this->cantidad = $value;
			return true;
		}else{
			return false;
		}
    }
    public function getCantidad(){
		return $this->cantidad;
    }
    public function setPrecio($value){
        if($this->validateAlphanumeric($value, 1, 50)){
			$this->precio= $value;
			return true;
		}else{
			return false;
		}
    }
    public function getPrecio(){
		return $this->precio;
    }
    public function setId_pro($value){
        if($this->validateId($value)){
			$this->Id_pro = $value;
			return true;
		}else{
			return false;
		}
    }
    public function getId_pro(){
		return $this->Id_pro;
    }

    public function setTipo_pro($value){
        if($this->validateId($value)){
			$this->tipo_p = $value;
			return true;
		}else{
			return false;
		}
    }

    public function getTipo_pro(){
		return $this->tipo_p;
    }
    public function setComen($value){
        if($this->validateAlphanumeric($value, 1, 50)){
			$this->comen= $value;
			return true;
		}else{
			return false;
		}
    }
    public function getComen(){
		return $this->comen;
    }
	
		public function setTalla($value){
			if($this->validateAlphanumeric($value, 1, 50)){
			$this->talla= $value;
			return true;
		}else{
			return false;
		}
    }

    public function getTalla(){
		return $this->talla;
    }

    public function setImagen($file){
		if($this->validateImage($file, $this->imagen, "../../web/img/dashboard/", 300, 300)){
			$this->imagen = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getImagen(){
		return $this->imagen;
	}
	public function unsetImagen(){
		if(unlink("../../web/img/dashboard/".$this->imagen)){
			$this->imagen = null;
			return true;
		}else{
			return false;
		}
    }
    public function setModelo($value){
        if($this->validateAlphanumeric($value, 1, 50)){
			$this->modelo= $value;
			return true;
		}else{
			return false;
		}
    }

    public function getModelo(){
		return $this->modelo;
		}
		public function setDescripcion($value){
			if($this->validateAlphanumeric($value, 1, 1000)){
		$this->descripcion = $value;
		return true;
	}else{
		return false;
	}

	}
	public function getDescripcion(){
	return $this->descripcion;
	}

	public function setIdCliente($value){
		if($this->validateId($value)){
	$this->id_cliente = $value;
	return true;
}else{
	return false;
}
}
public function getIdCliente(){
return $this->id_cliente;
}



		public function searchprodu($genero, $value){
				$sql = "SELECT`Id_producto`, `Marca`, `Cantidad`, `Precio`, `Id_proveedor`, `tipo_producto_p`, `talla`, `imagen`, `modelo`, 'descripcion' FROM `producto` WHERE tipo_producto_p = ? AND modelo LIKE ? ORDER BY modelo";
				$params = array($genero, "%$value%");
				return Database::getRows($sql, $params);
			}

    
    public function getProdu(){
        $sql = "SELECT Id_producto, Marca, Cantidad, Precio, Id_proveedor, tipo_producto_p, comentario, talla, imagen, modelo, descripcion FROM producto ORDER BY Modelo";
        $params = array(null);
        return Database::getRows($sql, $params);
		}
		
		public function obtener_prove(){
			$sql = "SELECT Id_prooveedor, Nombre FROM proveedor";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
    
		public function obtener_tipo(){
		$sql = "SELECT Id_tipo_p, Genero   FROM tipo_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    
    public function createProdu(){
        $sql = "INSERT INTO producto( Marca, Cantidad, Precio, Id_proveedor, tipo_producto_p, talla, imagen, modelo, descripcion) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $params = array($this->marca, $this->cantidad, $this->precio, $this->Id_pro, $this->tipo_p, $this->talla, $this->imagen, $this->modelo, $this->descripcion);
        return Database::executeRow($sql, $params);
		}
		public function getGeneroProductos($genero){
			$sql = "SELECT Id_producto, Marca, Cantidad, Precio, Id_proveedor, tipo_producto_p, comentario, talla, imagen, modelo, descripcion FROM producto WHERE tipo_producto_p = ? ORDER BY Modelo";
			$params = array($genero);
			return Database::getRows($sql, $params);
	}
	
    public function readProdu(){
		$sql = "SELECT Marca, Cantidad, Precio, Id_proveedor, tipo_producto_p, talla, imagen, modelo, descripcion FROM producto WHERE Id_producto = ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->marca = $user['Marca'];
			$this->cantidad = $user['Cantidad'];
            $this->precio = $user['Precio'];
            $this->Id_pro = $user['Id_proveedor'];
			$this->tipo_p = $user['tipo_producto_p'];
            $this->talla= $user['talla'];
            $this->imagen = $user['imagen'];
			$this->modelo = $user['modelo'];
			$this->modelo = $user['descripcion'];
			return true;
		}else{
			return null;
		}
    }
    public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE Id_producto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
    }
    public function updateProdu(){
		$sql = "UPDATE producto SET Marca = ?, Cantidad = ?, Precio = ?, Id_proveedor = ?, tipo_producto_p = ?, talla = ?, imagen = ?, modelo = ?, descripcion =?WHERE Id_producto = ?";
		$params = array($this->marca, $this->cantidad, $this->precio, $this->Id_pro, $this->tipo_p, $this->talla, $this->imagen, $this->modelo, $this->descripcion, $this->id);
		return Database::executeRow($sql, $params);
	}
	
	public function agregar_carrito(){
		$sql="INSERT into detalle_factura(id_producto, Id_cliente, cantidad, estado) values (?,?,?,?)";
		$params = array($this->$id, $this->$id_cliente, $this->$cantidad, 1);
		return Database::executeRow($sql, $params);
	}
		
	public function cantidad(){
		$sql = "SELECT Id_producto, Cantidad FROM tipo_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function updateExistencias(){
		$sql = "UPDATE producto SET Cantidad = ? WHERE Id_producto = ?";
		$params = array($this->cantidad, $this->id);
		return Database::executeRow($sql, $params);
		}
}
?>  
