<?php
class Usuario extends Validator{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $pregunta = null;
	private $respuesta = null;
    private $clave = null;
    private $tipo = null;

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

	public function setPregunta($value){
		if($this->validatePassword($value)){
			$this->pregunta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPregunta(){
		return $this->pregunta;
	}

	public function setRespuesta($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->respuesta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getRespuesta(){
		return $this->respuesta;
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
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($value){
		if($this-> validateAlphanumeric($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	//Métodos para manejar la sesión del usuario
	public function checkUs uario(){
		$sql = "SELECT Id_usuario FROM usuario WHERE Usuario = ?";
		$params = array($this->nombres);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id = $data['Id_usuario'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT Contrasena FROM usuario WHERE Id_usuario = ?";
		$params = array($this->id);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['Contrasena'])){
			return true;
		}else{
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE usuario SET Contrasena = ? WHERE Id_usuario = ?";
		$params = array($hash, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}

	//Metodos para manejar el CRUD
	public function getUsuarios(){
		$sql = "SELECT Id_usuario, Usuario, Apellido, Pregunta, Respuesta, Tipo_usuario FROM usuario ORDER BY Apellido";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchUsuario($value){
		$sql = "SELECT Id_usuario, Usuario, Apellido, Pregunta, Respuesta, Tipo_usuario FROM usuario WHERE Apellido LIKE ? OR Usuario LIKE ? ORDER BY Apellido";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createUsuario(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuario(Usuario, Apellido, Pregunta, Respuesta, Contrasena, Tipo_usuario) VALUES(?, ?, ?, ?, ?, ?)";
		$params = array($this->nombres, $this->apellidos, $this->pregunta, $this->respuesta, $hash, $this->tipo);
		return Database::executeRow($sql, $params);
	}
			public function readUsuario(){
				$sql = "SELECT Usuario, Apellido, Tipo_usuario FROM usuario WHERE Id_usuario = ?";
				$params = array($this->id);
				$user = Database::getRow($sql, $params);
				if($user){
					$this->nombres = $user['Usuario'];
					$this->apellidos = $user['Apellido'];
					$this->tipo = $user['Tipo_usuario'];
					
					return true;
				}else{
					return null;
				}
			}
	public function updateUsuario(){
		$sql = "UPDATE usuario SET Usuario = ?, Apellido = ?, Tipo_usuario = ? WHERE Id_usuario = ?";
		$params = array($this->nombres, $this->apellidos, $this->pregunta, $this->alias, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function deleteUsuario(){
		$sql = "DELETE FROM usuario WHERE Id_usuario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?> 