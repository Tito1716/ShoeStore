<?php //Contralador del Menu
require_once("../../app/models/registrarse.class.php");
try{
    $Cliente  = new Usuario;
    if (isset($_GET['id'])){  
    if($Cliente->setId($_GET['id'])){ 
        if($Cliente->readCliente()){
            if(isset($_POST['Actulizar'])){
                $_POST = $Cliente->validateForm($_POST);
                if($Cliente->setNombres($_POST['usuario'])){
                    if($Cliente->setApellidos($_POST['apellido'])){
                        if($Cliente->setCorreo($_POST['correo'])){
                                if($Cliente->updateCliente()){
                                    $_SESSION['usuario'] = $Cliente->getNombres();
                                    Page::showMessage(1, "Perfil modificado", "../clientes/clientes.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                        }else{
                        throw new Exception("Mal correo");
                    }
                    }else{
                        throw new Exception("Apellidos incorrectos");
                    }

                }else{
                    throw new Exception("Nombres incorrectos");
                }

            }
        }else{
            Page::showMessage(2, "Usuario inexistente", "Empleados_Admin.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "Empleados_Admin.php");
    }
}else{
    Page::showMessage(3, "Seleccione usuario", "Empleados_Admin.php");
}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/clientes/update_view.php");
?>
