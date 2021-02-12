<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Actualizar");
require_once("../../app/views/dashboard/sections/floating.php");
require_once("../../app/controllers/dashboard/proveedores/update_cotroller.php");
Page::templateFooter();
?>      