<!--Agrega espacion del navbar a la tarjeta-->
<div class="row">
<div class="s14 m11 l6"></div>
</div>
<div class="row">
    <div class="s14 m11 l6"></div>
    </div>
    <div class="row">
        <div class="s14 m11 l6"></div>
        </div>
        <!--Agrega la tarjeta-->
      <div class="row">
      <div class="col s6 offset-s3"><!--Ubicación de la tarjeta-->
      <div class = "card-panel z-depth-5"> <!--Agrega la sobra-->
       	<form method='post'>
      <div  class="input-field "><!--Agrega el input-->
      <i class="material-icons prefix"> account_circle</i><!--Agrega el simbolo--> 
      <input id='nombre_u' type='text' name='nombre_u' class='validate' value='<?php print($object->getNombres()) ?>' required/><!--El tipo del input-->
      <label class="active" for="nombre_u">Usuario</label><!--Agrega el nombre en el input-->
       </div>
       <br>
       <br>
     <div class="input-field "><!--Agrega el input-->
        <i class="material-icons prefix"> lock_open</i> <!--Agrega el simbolo--> 
        <input id='clave' type='password' name='clave' class="validate" value='<?php print($object->getClave()) ?>' required/><!--El tipo del input-->
          <label for="clave">Contraseña</label><!--Agrega el nombre en el input-->
        </div>
        <br><!--Agrega el botón y envia al menu-->
        <div class='row center-align'>
			<button type='submit' name='iniciar' class='btn waves-effect'>Entrar</button>
		</div>
          
        <div class="card-action center"><!--Te envia a recuperar contraseña-->
          <a class="modal-trigger" href="#modal1">¿Has olvidado tu contraseña?</a>
        </div>
              <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Ingresa tu correo</h4>
            <div class="input-field col s6">
              <input value="" id="first_name2" type="text" class="validate">
              <label class="active" for="first_name2">Correo</label>
            </div>
          </div>
          <div class="modal-footer">  
            <a href="#!" class="modal-action modal-close waves-effect waves-light btn">Enviar</a>
          </div>
        </div>

       	</form>
    
      </div>
      </div>
      </div>