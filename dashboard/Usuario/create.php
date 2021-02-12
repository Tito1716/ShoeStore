<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear usuario");
require_once("../../app/controllers/dashboard/empleados/create_controller.php");
Page::templateFooter();
?>