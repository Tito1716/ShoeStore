<?php
require_once("../app/models/login.class.php");
try{
    $object =  new Loginuser;
    if($object->setId($_SESSION['Id_cliente'])){
        if($object->readMiCliente()){
            if(isset($_POST['Actulizar'])){
                $_POST = $object->validateForm($_POST);
                if($object->setNombres($_POST['nombre'])){
                    if($object->setApellidos($_POST['apellido'])){
                        if($object->setCorreo($_POST['correo'])){
                            if($object->updateMiCliente()){
                                $_SESSION['nombre'] = $object->getNombres();
                                Page::showMessage(1, "Perfil modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }

                        }else{
                        throw new Exception("Mal Correo");
                    }

                    }else{
                        throw new Exception("Apellidos incorrectos");
                    }
                }else{
                    throw new Exception("Nombres incorrectos");
                }
            }


        }else{
            Page::showMessage(2, "Usuario inexistente", "index.php");
        }

    }else{
        Page::showMessage(2, "Usuario incorrecto", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}

require_once("../app/views/public/account/perfil.php");
?>