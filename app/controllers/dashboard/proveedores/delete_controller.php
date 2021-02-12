<?php
require_once("../../app/models/prove.class.php");
try{
	if(isset($_GET['id'])){
		//if($_GET['id'] !=$_SESSION['Id_prooveedor']){
			$prove = new Prove;
			if($prove->setId($_GET['id'])){
				if($prove->readprove()){
					if(isset($_POST['eliminar'])){
						if($prove->deleteUsuario()){
							Page::showMessage(1, "Proveedor eliminado", "proveedores.php");
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
        /*}else{
			throw new Exception("No se puede eliminar a sí mismo");
		}*/
	}else{
		Page::showMessage(3, "Seleccione usuario", "proveedores.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "proveedores.php");
}
require_once("../../app/views/dashboard/prove/delete_view.php");
?>