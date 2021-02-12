<?php
require_once("../../app/models/produ.class.php");
try{
    $produ  = new produ;
    if(isset($_POST['crear'])){
        $_POST = $produ->validateForm($_POST);
        if($produ->setMarca($_POST['Marca'])){
            if($produ->setCantidad($_POST['Cantidad'])){
                if($produ->setPrecio($_POST['Precio'])){
                    if($produ->setId_pro($_POST['prove'])){
                        if($produ->setTipo_pro($_POST['tipo'])){
                            if($produ->setTalla($_POST['Talla'])){
                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                    if($produ->setImagen($_FILES['archivo'])){
                                        if($produ->setModelo($_POST['Modelo'])){
                                            if($producto->createProdu()){
                                                Page::showMessage(1, "Producto creado", "producto.php");
                                            }else{
                                                if($producto->unsetImagen()){
                                                    throw new Exception(Database::getException());
                                                }else{
                                                    throw new Exception("Elimine la imagen manualmente");
                                                }
                                            }
                                        }else{
                                            throw new Exception("Seleccione un modelo");
                                        }
                                    }else{
                                        throw new Exception($produ->getImageError());
                                    }
                                }else{
                                    throw new Exception("Seleccione una imagen");
                                }
                            }
                            else{
                                throw new Exception("Mala Talla");
                            }
                        }
                            else{
                                throw new Exception("Precio incorrecta");
                            }
                        
                    }else{
                        throw new Exception("Seleccione un proveedor");
                    }
                }else{
                    throw new Exception("Precio incorrecta");
                }
            }else{
                throw new Exception("Precio incorrecta");
                }
            }else{
                throw new Exception("Cantidad -incorrecto");
            }
        }else{
            throw new Exception("Marca --incorrecto");
        }
    
}catch(Exception $error){
        Page::showMessage(2, $error->getMessage(), null);
    }
 require_once("../../app/views/dashboard/productos/create_view.php");
    ?>