<?php
require_once("../app/views/public/templates/page.class.php");/*Se manda a llamar a la plantilla del header y el footer 
                                                              page.class.php*/
Page::templateHeader("Mujeres");/*Se le escribe el nombre al directorio*/
require_once("../app/controllers/public/zapatos/mujer_controller.php");/*Se manda a llamar al controlador servicios
                                                                              _controller.php*/
Page::templateFooter("");
?>