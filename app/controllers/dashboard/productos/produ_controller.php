<?php
require_once("../../app/models/produ.class.php");
try{
    $produ = new produ;
	if(isset($_POST['buscar'])){
		$_POST = $produ->validateForm($_POST);
		$data = $produ->searchprodu($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $produ-> getProdu();
		}
	}else{
		$data = $produ-> getProdu();
	}
	if($data){	
		require_once("../../app/views/dashboard/productos/produc_view.php");
	}else{
		Page::showMessage(3, "No hay productos", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>