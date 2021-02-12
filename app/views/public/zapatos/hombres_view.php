<div class="slider">
    <ul class="slides">
        <li>
            <img src="../web/img/public/slider/nike.jpg">
            <!-- random image -->
            <div class="caption center-align">
                <h3 class="indigo-text darken-2">Zapatos de hombre</h3>
            </div>
        </li>
        <li>
            <img src="../web/img/public/slider/adidas.jpg">
            <!-- random image -->
            <div class="caption left-align">
                <h2 class="indigo-text darken-4">SLOGAN!</h2>
                <h3 class="indigo-text darken-1">"Caminado hacia el futuro, con toda la comodidad del mundo".</h3>
            </div>
        </li>
        <li>
            <img src="../web/img/public/slider/reebok.jpg">
            <!-- random image -->

        </div>
        </div>
        </li>
        <form method="post">
                <div class="row">
                <div class="col s9 offset-s2"><!--Tamaño de la tarjeta-->
                    <div class="card-panel z-depth-5 green darken-4"><!--Color de la tarjeta y la sombra-->
                    <span class="center card-title lime-text text-lighten-4">Buscar</span><!--Titulo de la tarjeta-->
                    <div class="input-field offset-s5"><!--Agrega la tarjeta de la busqueda-->
                    <i class='material-icons prefix'>search</i>
                    <input class='white-text' id='buscar' type='text' name='busqueda'/>
                    <label class='white-text' for='buscar'>Buscador</label>
                        <div>
                        <div class='input-field col s6 m4'>
                            <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='Buscar por nombre o descripción'><i class='material-icons'>check_circle</i></button>
                        </div>
                        </div>
                        <div class="row">
                        <div class="s8 m11 l6"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div>
                </form > 
<div class='container'>
<h4 class='center'>NUESTROS PRODUCTOS</h4>
<div class='row'>
<?php
                foreach($data as $categoria){
                    print("
                        <div class='col s12 m6 l4'>
                            <div class='card hoverable'>
                            <div class='card-image'>
                                <img class='activator' src='../web/img/dashboard/$categoria[imagen]'>
                                <a href='descripcion.php?id=$categoria[Id_producto]' class='btn-floating halfway-fab waves-effect waves-light red tooltipped' data-tooltip='Ver detalle'><i class='material-icons'>add</i></a>
                            </div>
                            <div class='card-content'>
                                <span class='card-title'>$categoria[Marca]</span>
                                <span class='card-title'>$categoria[modelo]</span>
                                <p>Precio (US$) $categoria[Precio]</p>
                            </div>
                            </div>
                        </div>
                ");
            }
            
                  
                ?>            
</main>