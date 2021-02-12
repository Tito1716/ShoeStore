<?php
require_once("../app/models/usuario.class.php");
try{
    $object = new Usuario;
    if($object->getUsuarios()){
        if(isset($_POST['iniciar'])){
            $_POST = $object->validateForm($_POST);
            if($object->setNombres($_POST['nombre_u'])){
                if($object->checkUsuario()){
                    if($object->setClave($_POST['clave'])){
                        if($object->verificacion_login()){  
                            $_SESSION['Id_usuario'] = $object->getId();
                            $_SESSION['Usuario'] = $object->getNombres();
                            Page::showMessage(1, "Autenticación correcta", "menu/menu.php");
                        }else{
                            throw new Exception("Clave inexistente");
                        }
                    }else{
                        throw new Exception("Clave menor a 6 caracteres");
                    }
                }else{
                    throw new Exception("Alias inexistente");
                }
            }else{
                throw new Exception("Alias incorrecto");
            }
        }
    }else{
        Page::showMessage(3, "No hay usuarios disponibles", "");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/dashboard/index/index_view.php");
?>