<?php //Controlador de la salida
require_once("../app/models/login.class.php");
$object = new Loginuser;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "index.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}
?>