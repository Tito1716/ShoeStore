<form method='post'>
<h5 class="center-align">¿Quiénes somos?</h5>
<div class="container"><!-- se describe la empresa -->
    <h5> Somos una empresa en linea que se encarga de la venta de zapatos 
     y distribucion de este producto en linea alrededor del pais con el 
     objetivo que muchas persona luzcan a la moda y se sientan muy
     comodas de llevar un zapato</h5>
</div>

<div class='container'>
    <div class='row'>
        <div>
            <h5 class='center-align green lighten-3'>Promociones</h5>
        </div>
        <div class='col s12 m4 l3'><!-- se crea una tarjeta en donde se descrbira todo lo relacionado al producto -->
            <div class='card hoverable small'>
                <div class='card-image'>
                    <img src='../web/img/public/tennis/adidassuper.jpg'>
                    <span class='card-title'></span>
                </div>
                <div class='card-content'>
                <h6 class='indigo-text'>Adidas Superstar</h6> 
                <h6>   Antes:$60.00 Ahora:$50.00</h6>
                </div>
            </div>
            <div class='row'>
            <a class='waves-effect waves-light btn col s9 offset-s1' href=''><i class='material-icons left'>add_shopping_cart</i>Comprar</a>
            </div>
        </div>
        <div class='col s12 m4 l3'><!-- se crea una tarjeta en donde se descrbira todo lo relacionado al producto -->
            <div class='card hoverable small'>
                <div class='card-image'>
                    <img src='../web/img/public/tennis/nikerush.jpg'>
                    <span class='card-title'></span>
                </div>
                <div class='card-content'>
                <h6 class='indigo-text'>Nike roshe</h6> 
                <h6>   Antes:$70.00 Ahora:$50.00</h6>
                </div>
            </div>
            <div class='row'>
            <a class='waves-effect waves-light btn col s9 offset-s1' href=''><i class='material-icons left'>add_shopping_cart</i>Comprar</a>
            </div>
        </div>
        <div class='col s12 m4 l3'><!-- se crea una tarjeta en donde se descrbira todo lo relacionado al producto -->
            <div class='card hoverable small'>
                <div class='card-image'>
                    <img src='../web/img/public/tennis/reebokcrossfit.jpg'>
                    <span class='card-title'></span>
                </div>
                <div class='card-content'>
                    <h6 class='indigo-text'>Reebok Crossfit</h6> 
                    <h6>   Antes:$55.99 Ahora:$47.99</h6>
                </div>
            </div>
            <div class='row'>
            <a class='waves-effect waves-light btn col s9 offset-s1' href=''><i class='material-icons left'>add_shopping_cart</i>Comprar</a>
            </div>
        </div>
        <div class='col s12 m4 l3'><!-- se crea una tarjeta en donde se descrbira todo lo relacionado al producto -->
            <div class='card hoverable small'>
                <div class='card-image'>
                    <img src='../web/img/public/tennis/tenn.jpg'>
                   
                </div>
                <div class='card-content'>
                <h6 class='indigo-text'>Adidas NMD R1</h6> 
                <h6>   Antes:$70.99 Ahora:$65.99</h6>
                </div>
            </div>
            <div class='row'>
            <a class='waves-effect waves-light btn col s9 offset-s1' href=''><i class='material-icons left'>add_shopping_cart</i>Comprar</a>
            </div>
        </div>
    </div>
    <div>
        <h5 class='center-align'>Registrarse</h5>
    </div>
    <div class='row'><!-- se crea un input donde se escribira el nombre en el registro -->
        <form class='col s12'>
            <div class='row'>
            <div class='input-field col s6'>
            <i class='material-icons prefix'>account_box</i>
            <input id='nombre' type='text' name='nombre' class='validate' pattern='[A-Za-z]+' data-error='Error' data-success='Bien' value='<?php print($usuario->getNombres()) ?>' required/>
            <label for='nombre'>Nombre</label>
              </div>
                <div class='input-field col s6'>
                    <i class='material-icons prefix'>account_box</i>
                    <input id='apellido' type='text' name='apellido' class='validate' pattern='[A-Za-z]+' value='<?php print($usuario->getApellidos()) ?>' required/>
                    <label for='apellido'>Apellido</label>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                     <i class='material-icons prefix'>email</i>
                    <input id='correo' type='email' name='correo' class='validate' value='<?php print($usuario->getCorreo()) ?>' required/>
                    <label for='correo'>Correo</label>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <i class='material-icons prefix'>security</i>
                    <input id='clave1' type='password' name='clave1' class='validate' data-length="8" maxlength='8' value='<?php print($usuario->getContraseña()) ?>' required/>
                    <label for='clave1'>Contraseña</label>
                </div>
            </div>
            <div class='row'>
                <div class='input-field col s12'>
                    <i class='material-icons prefix'>security</i>
                    <input id='clave2' type='password' name='clave2' class='validate' data-length="8" maxlength='8' value='<?php print($usuario->getContraseña()) ?>' required/>
                    <label for='clave2'>Confirmar contraseña</label>
                </div>
            </div>
            <div class='row center-align'>
            <div class='col s4 offset-s4'>
            <button type='submit' name='crear' class='btn waves-effect green'><i class='material-icons'>save</i></button>
            </div>
            </div>
    </div>
    </div>
</form>