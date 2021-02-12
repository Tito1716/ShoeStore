<?php //Contralador de la creacion de los empleados
require_once("../../app/models/usuario.class.php");
try{
$usuario  = new Usuario;
    if(isset($_POST['crear'])){
        $_POST = $usuario->validateForm($_POST);
         if($usuario->setNombres($_POST['usuario'])){
            if($usuario->setApellidos($_POST['apellido'])){
                if($usuario->setClave($_POST['contrasena'])){
                    if($usuario->setPregunta($_POST['pregunta'])){
                        if($usuario->setRespuesta($_POST['respuesta'])){
                            if($usuario->setTipo($_POST['tipo'])){
                                if($usuario->createUsuario()){
                                    Page::showMessage(1, "Usuario creado", "Empleados_admin.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }

                            }else{
                                throw new Exception("Tipo erroneo");
                            }
                        }else{
                            throw new Exception("Mala Respuesta");
                        }
                    }else{
                        throw new Exception("Mala pregunta");
                    
                    }
                }else{
                    throw new Exception("Mala contraseña");
                }
            }else{
                throw new Exception("Apellidos incorrectos");
            }
         }else{
            throw new Exception("Nombres incorrectos");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}

    require_once("../../app/views/dashboard/Empleados/create_view.php");
    ?>