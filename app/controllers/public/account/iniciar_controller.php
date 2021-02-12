<?php
require_once("../app/models/login.class.php");
try{
	$object =  new Loginuser;
	if($object->getUsuarios()){
        if(isset($_POST['action'])){
            $_POST = $object->validateForm($_POST);
            if($object->setCorreo($_POST['correo'])){
                if($object->checkUsuario()){
                    if($object->setClave($_POST['clave'])){
                        if($object->verificacion_login()){  
                            $_SESSION['Id_cliente'] = $object->getId();
                            $_SESSION['Nombre'] = $object->getNombres();
                            Page::showMessage(1, "Autenticación correcta", "../public/index.php");
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
require_once("../app/views/public/account/iniciar_view.php");
?>