<?php
require_once("../../app/models/prove.class.php");
try{
    $prove  = new Prove;
        if(isset($_POST['crear'])){
            $_POST = $prove->validateForm($_POST);
             if($prove->setNombres($_POST['Nombre'])){
                if($prove->setDireccion($_POST['direccion'])){
                    if($prove->setTelefonos($_POST['telefono'])){
                                    if($prove->createPROVE()){
                                        Page::showMessage(1, "Proveedor creado", "proveedores.php");
                                    }else{
                                        throw new Exception(Database::getException());
                                    }        
                    }else{
                        throw new Exception("Mal telefono");
                    }
                }else{
                    throw new Exception("Dirección incorrecta");
                }
             }else{
                throw new Exception("Nombres incorrectos");
            }
        }
    }catch(Exception $error){
        Page::showMessage(2, $error->getMessage(), null);
    }
 require_once("../../app/views/dashboard/prove/create_view.php");
    ?>