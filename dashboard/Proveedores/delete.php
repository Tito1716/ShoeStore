<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Borrar Usuario");
require_once("../../app/controllers/dashboard/proveedores/delete_controller.php");
Page::templateFooter();
?>