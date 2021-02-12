<?php
require_once("../../app/views/dashboard/templates/page.class.php");//Manda a llamar las  
Page::templateHeader("Grafico"); //Titulo de la pagina
require_once("../../app/views/dashboard/sections/floating.php");//Llamael boton mobil
require_once("../../app/controllers/dashboard/graficos/grafico1_controller.php");//Llama al controlador
Page::templateFooter();
?>  