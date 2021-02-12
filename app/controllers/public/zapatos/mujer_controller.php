<?php
require_once("../app/models/produ.class.php");
try{
	$categoria = new Produ;
	$data = $categoria->getGeneroProductos(2);
	if(isset($_POST['buscar'])){
		$_POST = $categoria->validateForm($_POST);
		$data = $categoria->searchprodu(2, $_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $categoria->getGeneroProductos(2);
		}	
	}

	if($data){
		require_once("../app/views/public/zapatos/mujer_view.php");
	}else{
		Page::showMessage(3, "No hay productos", null);
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>
