<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
class Page extends Component{
    public static function templateHeader($title){
    session_start();
		ini_set("date.timezone","America/El_Salvador");
        print("
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='utf-8'>
            <title>Shoestore - $title</title>
            <link type='text/css' rel='stylesheet' href='../../web/css/materialize.min.css'/>
            <link type='text/css' rel='stylesheet' href='../../web/css/style.css'/>
            <link type='text/css' rel='stylesheet' href='../../web/css/icon.css'/>
<script type='text/javascript' src='../../web/js/jquery-3.3.1.min.js'></script>            <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
            
            <script type='text/javascript' src='../../web/js/highcharts.js'></script>
            <script type='text/javascript' src='../../web/js/exporting.js'></script>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        </head>
        <header>
        <nav>
        <div class='nav-wrapper green darken-4'><!-- El color de la barra-->
        <a href='#!' class='brand-logo left'><!-- Ubicación del logo-->
          <i class='material-icons'>local_mall</i>Shoes's</a><!--Nombre del logo-->
        <a href='#' data-activates='mobile-demo' class='button-collapse'><!--Para crear le meniu para unu mobil-->
          <i class='material-icons'>menu</i><!--Llama el simbolo que se utiliza-->
        </a>
        <ul class='right hide-on-med-and-down'><!--Ocultarse en pantallas medianas o menores-->
          <li><!--Lllama todos los enlaces y botones para le menu-->
            <a class='waves-effect waves-light btn-large' href='../Usuario/Empleados_Admin.php'>Empleados</a>
          </li>
          <li>
            <a class='waves-effect waves-light btn-large' href='../Productos/producto.php'>Productos </a>
          </li>
          <li>
            <a class='waves-effect waves-light btn-large' href='../Proveedores/proveedores.php'>Proveedores</a>
          </li>
          <li>
          <a class='waves-effect waves-light btn-large' href='../clientes/clientes.php'>Clientes</a>
        </li>
        </ul>
        <ul class='side-nav' id='mobile-demo'><!--Menu del mobil-->
<!--Links del obil-->
    <li><a href='../Usuario/Empleados_Admin.php'>Empleados</a></li>
    <li><a href='../Productos/producto.ph'>Productos</a></li>
    <li><a  href='../Proveedores/proveedores.php'>Proveedores</a></li>
    <li>
    <a class='waves-effect waves-light btn-large' href='Clientes.php'>Clientes</a>
    </li>
</ul>
</nav>
    <main>
");   
    }             

    public static function templateFooter(){
        print("
        <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>    
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div> 
   <div class='row'>
      <div class='s14 m11 l6'></div>
  
            <!--Footer-->
            </main>
            <footer class='page-footer green darken-4'><!--Agrega la clase del footer-->
    <div class='container'>
      <div class='row'><!--Agrega el espacio del footer-->
        <div class='col l6 s12'>
          <h5 class='lime-text text-lighten-4'>Shoes</h5><!--Texto del footer-->
          <p class='lime-text text-lighten-4'>La mejor tienda para encontrar todos los zapatos</p><!--Texto del footer-->
        </div>
        <div class='col l4 offset-l2 s12'><!--Texto del footer-->
          <h5 class='lime-text text-lighten-4'>Links</h5><!--Links del footer -->
          <ul>
            <li>
              <a class='lime-text text-lighten-4' href='../dashboard/Empleados_admin.php'>Empleados</a>
            </li>
            <li>
              <a class='lime-text text-lighten-4' href='../dashboard/Productos_admin.php'>Productos</a>
            </li>
            <li>
              <a class='lime-text text-lighten-4' href='../dashboard/Proovedores.php'>Proveedores</a>
            </li>
          </ul>
        </div>
      </div>
    </div><!--Texto del footer-->
    <div class='footer-copyright'>
      <div class='container'>
        © 2018 Copyright Text
      </div>
    </div>
  </footer>
            <!--se llaman las opciones para que la pagina pueda utlizar debidas especificaciones-->
            <script type='text/javascript' src='../../web/js/materialize.min.js'></script>
            <script type='text/javascript' src='../../web/js/main.js'></script>
         </body>
	</html>
        ");
    }
}
?>