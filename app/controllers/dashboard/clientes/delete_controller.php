<?php
require_once("../../app/models/registrarse.class.php");
try{
	if(isset($_GET['id'])){
		if($_GET['id'] != $_SESSION['Id_cliente']){
			$usuario = new Usuario;
			if($usuario->setId($_GET['id'])){
				if($usuario->readCliente()){
					if(isset($_POST['eliminar'])){
						if($usuario->deleteCliente()){
							Page::showMessage(1, "Cliente eliminado", "Clientes.php");
						}else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Usuario inexistente");
				}
			}else{
				throw new Exception("Usuario incorrecto");
			}
		}else{
			throw new Exception("No se puede eliminar a sí mismo");
		}
	}else{
		Page::showMessage(3, "Seleccione usuario", "Empleados_Admin.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "Empleados_Admin.php");
}
require_once("../../app/views/dashboard/empleados/delete_view.php");
?>