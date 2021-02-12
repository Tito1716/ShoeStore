<?php
require_once("../app/views/public/templates/page.class.php");/*se manda a llamar a la plantilla del header y el footer
                                                             page.class.php */
Page::templateHeader("Información del servicio");/*Se le esribe el nombre al directorio*/
require_once("../app/controllers/public/zapatos/descripcion_controller.php");/*Se manda a llamar al controlador 
                                                                                  info_servicios_controller.php*/
Page::templateFooter("");
?>