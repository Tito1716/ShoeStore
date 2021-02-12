<?php
require_once("../../app/models/registrarse.class.php");
try{
    $cliente = new Usuario;
	if(isset($_POST['buscar'])){
		$_POST = $cliente->validateForm($_POST);
		$data = $cliente->searchClientes($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $cliente->getClientes();
		}
	}else{
		$data = $cliente->getClientes();
	}
	if($data){	
		require_once("../../app/views/dashboard/clientes/clientes_view.php");
	}else{
		Page::showMessage(3, "No hay productos", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>