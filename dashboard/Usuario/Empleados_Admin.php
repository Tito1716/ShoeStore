<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Menu");
require_once("../../app/views/dashboard/sections/floating.php");
require_once("../../app/controllers/dashboard/empleados/Empleados_controller.php");
Page::templateFooter();
?>  