<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("cRRITO");/*Se le esribe el nombre al directorio*/
require_once("../app/controllers/public/zapatos/agregar_carrito.php");/*Se manda a llamar al controlador 
                                                                                  info_servicios_controller.php*/
Page::templateFooter("");


?>