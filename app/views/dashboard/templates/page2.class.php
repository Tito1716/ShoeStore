<?php
    require_once("../app/models/database.class.php");
    require_once("../app/helpers/validator.class.php");
    require_once("../app/helpers/component.class.php");
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
            <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'/>
            <link type='text/css' rel='stylesheet' href='../web/css/style.css'/>
            <link type='text/css' rel='stylesheet' href='../web/css/icon.css'/>
            <script type='text/javascript' src='../web/js/sweetalert.min.js'></script>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        </head>
        <header>
        <nav>
        <div class='nav-wrapper green darken-4'><!--Agrega el menu de arriba-->
        <a href='#!' class= 'brand-logo center'> <i class='material-icons'>local_mall</i>Shoes's</a><!--Agrega el logo y titulo-->
        <a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a><!--Agrega el menu del mobil-->
        <ul class='right hide-on-med-and-down'>
            <li><a class='waves-effect waves-light btn-large'>Visita nuestra tienda online	</a></li>
        </ul>
        <ul class='side-nav' id='mobile-demo'>
          <li><a href='#'>Visita nuestra tienda online</a></li>
        </ul>
</nav>
    <main>
");   
    }             

    public static function templateFooter(){
        print("
            <!--Footer-->
            </main>
            <!--se llaman las opciones para que la pagina pueda utlizar debidas especificaciones-->
            <script type='text/javascript' src='../web/js/jquery-3.3.1.min.js'></script>
            <script type='text/javascript' src='../web/js/materialize.min.js'></script>
            <script type='text/javascript' src='../web/js/main.js'></script>
         </body>
	</html>
        ");
    }
}
?>