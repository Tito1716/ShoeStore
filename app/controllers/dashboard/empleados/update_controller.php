<?php
require_once("../../app/models/usuario.class.php");
try{
    if(isset($_GET['id'])){
        $usuario = new Usuario;
        if($usuario->setId($_GET['id'])){
            if($usuario->readUsuario()){
                if(isset($_POST['actualizar'])){
                    $_POST = $usuario->validateForm($_POST);
                    if($usuario->setNombres($_POST['usuario'])){
                        if($usuario->setApellidos($_POST['apellido'])){
                                if($usuario->setTipo($_POST['tipo'])){
                                    if($usuario->updateUsuario()){
                                        Page::showMessage(1, "Usuario modificado", "Empleados_Admin.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Tipo incorrecto");
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
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/Empleados/update_view.php");
?>