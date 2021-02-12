<?php
class Loginuser extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
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
			$this->nombres = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->nombres;
	}

	public function setApellidos($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->apellidos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getApellidos(){
		return $this->apellidos;
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

   	public function setClave($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	
	public function getClave(){
		return $this->clave;
	}

	//Métodos para manejar la sesión del usuario
	public function checkUsuario(){
		$sql = "SELECT Id_cliente FROM cliente WHERE correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['Id_cliente'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT Contrasena FROM cliente WHERE correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			if(password_verify($this->clave , $data['Contrasena']))
			return true;
		}else{
			return false;
		}
	}

	public function verificacion_login(){
		$sql = "SELECT * FROM cliente WHERE Correo = ?";
		$params = array($this->correo);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['Id_cliente'];
			$this->nombres = $data['Nombre'];
			if($this->clave == $data['Contrasena'])
			{	
			return true;
		}else{
			return false;
		}
	}
}

 

	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE cliente SET Contrasena = ? WHERE Id_cliente = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}

	public function getUsuarios(){
		$sql = "SELECT Id_cliente, Nombre, Apellido, Correo, Contrasena FROM cliente ORDER BY correo";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function logOut(){
		return session_destroy();
	}
	public function readMiCliente(){
		$sql = "SELECT  Nombre, Apellido, Correo FROM cliente WHERE Id_cliente = ?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombres = $user['Nombre'];
			$this->apellidos = $user['Apellido'];
			$this->correo = $user['Correo'];
			return true;
		}else{
			return null;
		}
	}
	public function updateMiCliente(){
		$sql = "UPDATE cliente SET  Nombre = ?, Apellido = ?, Correo = ? WHERE  Id_cliente = ?";
		$params = array($this->nombres, $this->apellidos,  $this->correo , $this->id);
		return Database::executeRow($sql, $params);
	}
}
    ?>