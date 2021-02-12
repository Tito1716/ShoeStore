<?
require_once("../../app/views/dashboard/templates/page.class.php");//Llama a todos las clases   
Page::templateHeader("Grafico");//Titulo de la pagina
require_once("../../app/views/dashboard/sections/floating.php");//Llama el botón mobil  
require_once("../../app/controllers/dashboard/graficos/graficos_controller.php");//Llama al controlador
Page::templateFooter();
?>  