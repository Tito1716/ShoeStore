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
            <link type='text/css' rel='stylesheet' href='../web/css/icon.css'/>
            <link type='text/css' rel='stylesheet' href='../web/css/style_login.css'/>
            <script type='text/javascript' src='../web/js/sweetalert.min.js'></script>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        </head>
        ");
    
    if(isset($_SESSION['Id_cliente'])){
print("
        <header>
        <div class='navbar-fixed'>
        <ul id='dropdown1' class='dropdown-content'>
            <li>
                <a href='hombres.php'>de hombre</a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='mujer.php'>de mujer</a>
            </li>
        </ul>
        <ul id='dropdown2' class='dropdown-content'>
            <li>
                <a href='logout.php'> Cerrar seccion</a>
            </li>
            <li class='divider'></li>
            <li>
                <a href='mi_perfil.php'> Editar</a>
            </li>
        </ul>
        <nav>
            <div class='nav-wrapper green lighten-1'>
                    <a href='#' data-activates='slide-out' class='button-collapse fixed' id='hola'>
                            <i class='material-icons'>menu</i>
                        </a>
                <a href='#!' class='brand-logo'><img src='../web/img/public/slider/l.png' height='60'></a>
                <ul class='right hide-on-med-and-down'>
                    <li>
                        <a href='index.php'>Inicio</a>
                    </li>
                    <li>
                        <a class='dropdown-button' href='#!' data-activates='dropdown1'>Zapatos
                            <i class='material-icons right'>arrow_drop_down</i>
                        </a>
                    </li>
                    <li><a href='#' class='dropdown-button' data-activates='dropdown2'><i class='material-icons left'>verified_user</i>Cuenta:<b>$_SESSION[Nombre]</b></a></li>
                    <li>
                            <a href='carrito.php'>Carrito</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </nav>
    </div>
    <ul id='slide-out' class='side-nav'>
        <li>
            <div class='user-view'>
                <div class='background'>
                    <img src='../web/img/public/slider/coverse.jpg'>
                </div>
                <a href='#!user'>
                    <img class='circle' src='../web/img/public/slider/nike.jpg'>
                </a>
                <a href='#!name'>
                    <span class=' light-blue-text darken-4'>Shoestore's</span>
                </a>
                <a href='https://outlook.live.com/mail/#/inbox'>
                    <span class='light-blue-text darken-4 email'>shoestoree@outlook.es</span>
                </a>
            </div>
        </li>
        <li>
            <a class='waves-effect'href='index.php'>Inicio</a>
        </li>
        <li>
                <div class='divider'></div>
        </li>
        <li>
                <a class='waves-effect'href='carrito.php'>Carrito</a>
        </li>
        <li>
            <div class='divider'></div>
        </li>
        <li>
            <a class='waves-effect'href='hombres.php'>Zapatos de hombre</a>
        </li>
        <li>
            <div class='divider'></div>
        </li>
        <li>
            <a class='waves-effect'href='mujer.php'>Zapatos de mujer</a>
        </li>
        <li>
            <div class='divider'></div>
        </li>
        <li>
            <a class='waves-effect'href='iniciar.php'>Iniciar sesion</a>
        </li>
    </ul>
    <main>");
require_once("../app/views/public/sections/modals_view.php");
    }      
    else   {print("
        <header>
        <div class='navbar-fixed'>
        <nav>
        
            <div class='nav-wrapper green lighten-1'>
                <a href='#!' class='brand-logo'><img src='../web/img/public/slider/l.png' height='60'></a>
            
            <ul class='right hide-on-med-and-down'>
                    
                    <li>
                        <a href='iniciar.php'>Iniciar sesion</a>
                    </li>
                   
                </ul>
                </div>   
        </nav>
        
    </div>
    </div>
    </header>
    <main>");

    }    
}

    public static function templateFooter(){
        print("
            <!--Footer-->
            </main>
            <footer class='page-footer  fixed green'>
            <div class='container'>
            <div class='row'>
                <div class='col l6 s12'>
                <p>
                <blockquote><a href='#mision' class='modal-trigger white-text'><b>Misión</b></a> | <a href='#vision' class='modal-trigger white-text'><b>Visión</b></a> | <a href='#valores' class='modal-trigger white-text'><b>Valores</b></a></blockquote>
                <blockquote><a href='#terminos' class='modal-trigger white-text'><b>Términos y condiciones</b></a></blockquote>
            </p>
                </div>
                <div class='col s12 m6 l6'>
                
                <p>
                    <blockquote><a class='white-text' href='https://outlook.live.com/mail/#/inbox>Link 1' target='_blank'><b>Correo</b></a> | <a class='white-text' href='https://www.facebook.com/Shoestoree-1637347719644869/?ref=bookmarks' target='_blank'><b>facebook</b></a></blockquote>
                </p>
            </div>
        </div>
    </div>
             
        <div class='footer-copyright'>
            <div class='container'>
                © 2018 Shoes
            </div>
        </div>
    </footer>
            <!--se llaman las opciones para que la pagina pueda utlizar debidas especificaciones-->
            <script type='text/javascript' src='../web/js/jquery-3.3.1.min.js'></script>
            <script type='text/javascript' src='../web/js/materialize.min.js'></script>
            <script type='text/javascript' src='../web/js/main.js'></script>
            <script>
         $(document).ready(function() {
            $('select').material_select();
         });
        </script>
         </body>
	</html>
        ");
    }
}
?>