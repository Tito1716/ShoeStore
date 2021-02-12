<?php
class Usuario extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombre = null;
	private $apellido = null;
	private $correo = null;
	private $clave = null;

	//Métodos para sobrecarga de propiedades
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
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->nombre;
	}

	public function setApellidos($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->apellido = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getApellidos(){
		return $this->apellido;
	}

	public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->correo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->correo;
	}

		public function setContraseña($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getContraseña(){
		return $this->clave;
	}

	public function getConfirmar($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	public function setConfirmar(){
		return $this->clave;
    }
    public function createregistro(){
        $sql = "INSERT INTO cliente( Nombre, Apellido, Correo, Contrasena) VALUES(?, ?, ?, ?)";
        $params = array($this->nombre, $this->apellido, $this->correo, $this->clave);
        return Database::executeRow($sql, $params);
	}
	public function updateCliente(){
		$sql = "UPDATE cliente SET Nombre = ?, Apellido = ?, Correo= ? WHERE Id_cliente = ?";
		$params = array($this->nombre, $this->apellido, $this->correo, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function searchClientes($value){
		$sql = "SELECT * FROM cliente WHERE Nombre LIKE ? ";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}

	public function getClientes(){
		$sql = "SELECT Id_cliente, Nombre, Apellido, Correo FROM cliente ORDER BY Nombre";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function readCliente(){
		$sql = "SELECT Nombre, Apellido, Correo FROM cliente WHERE Id_cliente = ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombre = $user['Nombre'];
			$this->apellidos = $user['Apellido'];
			$this->correo = $user['Correo'];
			return true;
		}else{
			return null;
		}
	}
	public function deleteCliente(){
		$sql = "DELETE FROM cliente WHERE Id_cliente = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
	
	
}
?>
	