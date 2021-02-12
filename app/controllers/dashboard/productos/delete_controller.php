<?php
require_once("../../app/models/produ.class.php");
try{
	if(isset($_GET['id'])){
		$producto = new produ;
		if($producto->setId($_GET['id'])){
			if($producto->readProdu()){
				if(isset($_POST['eliminar'])){
					if($producto->deleteProducto()){
						if($producto->unsetImagen()){
							Page::showMessage(1, "Producto eliminado", "producto.php");
						}else{
							throw new Exception("No se eliminó el archivo de la imagen");
						}
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Producto inexistente");
			}	
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione producto", "producto.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "producto.php");
}
require_once("../../app/views/dashboard/productos/delete_view.php");
?>