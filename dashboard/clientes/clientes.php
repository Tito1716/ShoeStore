<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Clientes");
require_once("../../app/views/dashboard/sections/floating.php");
require_once("../../app/controllers/dashboard/clientes/clientes_controller.php");
Page::templateFooter();
?>  