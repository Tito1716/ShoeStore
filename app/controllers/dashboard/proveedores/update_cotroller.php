<?php
require_once("../../app/models/prove.class.php");
try{
    if(isset($_GET['id'])){
        $prove = new Prove;
        if($prove->setId($_GET['id'])){
            if($prove->readprove()){
                if(isset($_POST['actualizar'])){
                    $_POST = $prove->validateForm($_POST);
                    if($prove->setNombres($_POST['Nombre'])){
                        if($prove->setDireccion($_POST['direccion'])){
                                if($prove->setTelefonos($_POST['telefono'])){
                                    if($prove->updateprove()){
                                        Page::showMessage(1, "Proveedor Modificado", "proveedores.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("teleffono incorrecto");
                                }
                           
                        }else{
                            throw new Exception("Direccion incorrectos");
                        }
                    }else{
                        throw new Exception("direccion incorrecta");
                    }
                }
            }else{
                Page::showMessage(2, "teleffono incorrecto", "proveedores.php");
            }
        }else{
            Page::showMessage(2, "Direccion incorrectos", "proveedores.php");
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "proveedores.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/prove/update_view.php");
?>