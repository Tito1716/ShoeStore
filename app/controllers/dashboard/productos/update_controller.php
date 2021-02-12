<?php
require_once("../../app/models/produ.class.php");
try{
    if(isset($_GET['id'])){
        $produ = new produ;
        if($produ->setId($_GET['id'])){
            if($produ->readProdu()){
                if(isset($_POST['actualizar'])){
                    $_POST = $produ->validateForm($_POST);
                    if($produ->setMarca($_POST['Marca'])){
                        if($produ->setCantidad($_POST['Cantidad'])){
                            if($produ->setPrecio($_POST['Precio'])){
                                if($produ->setId_pro($_POST['prove'])){
                                    if($produ->setTipo_pro($_POST['tipo'])){
                                        if($produ->setTalla($_POST['Talla'])){
                                            if($produ->setModelo($_POST['Modelo'])){
                                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                                    if(!$produ->setImagen($_FILES['archivo'])){
                                                        throw new Exception($produ->getImageError());
                                                    }
                                                }
                                                if($produ->updateProdu()){
                                                    Page::showMessage(1, "Producto modificado", "producto.php");
                                                }else{
                                                    throw new Exception(Database::getException());
                                                }

                                            }
                                            else{
                                            throw new Exception("MODELO incorrecto");
                                            }
                                            
                                        }else{
                                            throw new Exception("Talla incorrecto");
                                            }
            
            
                                    }else{
                                    throw new Exception("Tipo incorrecto");
                                    }
            
                                }else{
                                    throw new Exception("Prove incorrecto");
                                    }
            
            
                                    } else{
                                    throw new Exception("Precio incorrecto");
                                    }
            
                            }else{
                            throw new Exception("Cantidad incorrecto");
                            }
                    }else{
                        throw new Exception("Marca --incorrecto");
                    }
                    
                }
            }else{
                Page::showMessage(2, "Usuario inexistente", "producto.php");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "producto.php");
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "producto.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/productos/update_view.php");
?>