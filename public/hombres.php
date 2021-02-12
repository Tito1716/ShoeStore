<?php
require_once("../app/views/public/templates/page.class.php");/*Se manda a llamar a la plantilla del header y el footer 
                                                              page.class.php*/
Page::templateHeader("Hombres");/*Se le escribe el nombre al directorio*/
require_once("../app/controllers/public/zapatos/hombres_controller.php");/*Se manda a llamar al controlador servicios
                                                                              _controller.php*/
Page::templateFooter("");
?>