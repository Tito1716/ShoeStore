<?php
require_once("../app/models/registrarse.class.php");
try{
    $usuario  = new usuario;
    if(isset($_POST['crear'])){
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setNombres($_POST['nombre'])){
            if($usuario->setApellidos($_POST['apellido'])){
                if($usuario->setCorreo($_POST['correo'])){
                    if($usuario->setContraseña($_POST['clave1'])){
                        if($usuario->createregistro()){
                            Page::showMessage(1, "Registro creado", "index.php");
                                        }else{
                                            throw new Exception("Nombre incorrecto");
                                        }     
                                }else{
                                    throw new Exception("Apellido incorrecto");
                                }
                        }else{
                            throw new Exception("Correo incorrecto");
                                }
                    }else{
                        throw new Exception("Contraseña incorrecta");
                        }
                }
           }
        }catch(Exception $error){
            Page::showMessage(2, $error->getMessage(), null);
        }
require_once("../app/views/public/index/index_view.php");
?>