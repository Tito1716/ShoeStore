<?php
//SE LLAMA EL MODELO ( NUEVAMENTE, POCHA MADRE QUIERO DORMIR ALV :,v)
require_once("../../app/models/prove.class.php");
try{
	$proveedor = new Prove;
	//ESTO ES POR SI BUSCA ALGO EL TODO MECO DEL USUARIO O ADMINISTRADOR xD
	if(isset($_POST['buscar'])){
		$_POST = $proveedor->validateForm($_POST);
		$data = $proveedor->searchProveedor($_POST['busqueda']);
		if($data){
			//SI HAY INFORMACION LA MUESTRA Y TE INDICA LA CANTIDAD DE RESULTADOS (ESTA BIEN MAMON ESO xD)
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $proveedor->getprove();
		}
	}else{
		//SI HAY DESARROLLADORAS LA SETEAS EN LA VARIABLE DATA
		$data = $proveedor->getprove();
	}
	if($data){
		// SI HAY, TE LAS MUESTRA EN LA ZUKULENTA VISTA Bv SINO NEL, TE MANDA A CREAR UNA xD
		require_once("../../app/views/dashboard/prove/prove_view.php");
	}else{
		Page::showMessage(3, "No hay desarrolladoras disponibles", "crear_desarrolladora.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/pagina_principal.php");
}
?>