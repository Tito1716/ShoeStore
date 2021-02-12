<?php
require_once("../../app/views/dashboard/templates/page.class.php");//Llama la clase
Page::templateHeader("Grafico");//Titula de la pagina
require_once("../../app/views/dashboard/sections/floating.php");//Llama al botón mobil
require_once("../../app/controllers/dashboard/graficos/grafico2_controller.php");
Page::templateFooter();
?>  