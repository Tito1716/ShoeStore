<?php
require_once("../app/models/produ.class.php");
require_once("../app/models/detalle_pedido.class.php");
require_once("../app/models/pedido.class.php");
try{	
	 if(isset($_GET['id'])){
		$categorias = new Produ;
		$detalle = new detalle;
	    $pedido = new pedido;
		if($categorias->setId_produ($_GET['id'])){
			if($categorias->readProdu()){
				if(isset($_POST['agregar'])){
					$_POST = $pedido->validateForm($_POST);
					if($categorias->getId($_GET['id'])){
						if($pedido->setCliente($_SESSION['Id_cliente'])){
							if($pedido->createPedido()){

								$_POST = $detalle->validateForm($_POST);
								if($detalle->setPedido($_SESSION['id_pedido'])){
									if($detalle->setproductoID($_GET['id'])){
										if($detalle->setCantidad($_POST['cantidad'])){

											$subtotal = $categorias->getPrecio() * $_POST['cantidad'];
											if($detalle->setSubtotal($subtotal)){
												if($detalle->createDetalle()){

													$nueva_existencia = $categorias->getCantidad() - $_POST['cantidad'];
													if($categorias->setCantidad($nueva_existencia)){
														if($categorias->updateExistencias()){
                                                            Page::showMessage(1, "Se agrego el producto al carrito", null);
                                                        }else{
                                                            throw new Exception(Database::getException()); 
                                                        }
													}else{
                                                        throw new Exception("Error al poner existencias");
                                                    }
												}else{
													throw new Exception(Database::getException()); 
												}
											}else{
                                                throw new Exception(Database::getException());
                                            }
										}else{
                                            throw new Exception("Cantidad no valido");
                                        }
									}else{
                                        throw new Exception("Id del producto no valido");
                                    }

								}else{ 	
                                    throw new Exception("Id detalle no valido");
                                }

							}else{
                                throw new Exception(Database::getException());
                            }
						}else{
                            throw new Exception("Cliente no tomado");
                        }
					}else{
                        new Exception("Id de producto no valido");
                    }
				}
				require_once("../app/views/public/zapatos/descripcion_view.php");
			}else{
				throw new Exception("Producto inexistente");	
			}
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		throw new Exception("Seleccione producto");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}

?>