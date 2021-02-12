<?php
class Prove extends Validator{
    private $id = null;
	private $Nombre = null;
	private $direccion = null;
    private $telefono = null;

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

    public function setNombres($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->Nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->Nombre;
    }
    
    public function setDireccion($value){
		if($this->validateAlphabetic($value, 1, 200)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
	}

    public function setTelefonos($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->telefono = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTelefonos(){
		return $this->telefono;
    }
    
		//Metodos crud
		public function getprove(){
			$sql = "SELECT Id_prooveedor, Nombre, Direccion, telefono FROM proveedor ORDER BY Nombre";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
		
		public function buscarpro(){
			$sql ="SELECT Id_prooveedor, Nombre, Direccion, telefono FROM proveedor WHERE Nombre LIKE ? OR Usuario LIKE ? ORDER BY telefon";
			$params = array("%$value%", "%$value%");
			return Database::getRows($sql, $params);
		}
		public function createPROVE(){
			$sql = "INSERT INTO proveedor(Nombre, Direccion, telefono) VALUES(?, ?, ?)";
			$params = array($this->Nombre, $this->direccion, $this->telefono);
			return Database::executeRow($sql, $params);
		}
		public function readprove(){
			$sql = "SELECT Nombre, Direccion, telefono FROM proveedor WHERE Id_prooveedor= ?";
			$params = array($this->id);
			$user = Database::getRow($sql, $params);
			if($user){
				$this->nombres = $user['Nombre'];
				$this->apellidos = $user['Direccion'];
				$this->tipo = $user['telefono'];
				return true;
			}else{
				return null;
			}
		}
		public function searchProveedor($value){
			$sql = "SELECT * FROM proveedor WHERE Nombre LIKE ? ";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
		public function updateprove(){
			$sql = "UPDATE proveedor SET   Nombre= ?,  Direccion = ?, telefono = ? WHERE Id_prooveedor = ?";
			$params = array($this->Nombre, $this->direccion, $this->telefono, $this->id);
			return Database::executeRow($sql, $params);
		}
		public function deleteUsuario(){
			$sql = "DELETE FROM proveedor WHERE Id_prooveedor = ?";
			$params = array($this->id);
			return Database::executeRow($sql, $params);
		}

}
?>