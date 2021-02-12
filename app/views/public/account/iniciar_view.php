<div class='row'>
      <div class='col s6 offset-s3'>
      <div class =card-panel z-depth-5>
       	<form method='post'>
      <div  class='input-field '>
      <i class='material-icons prefix'>email</i>
      <input id='correo' type='email' name='correo' class='validate' value='<?php print($object->getCorreo()) ?>' required/>
      <label for='correo'>Correo</label>
       </div>
       <div class='row'>
       <div class='s14 m11 l6'></div>
       </div>
       <div class='row'>
       <div class='s14 m11 l6'></div>
       </div>
     <div class='input-field '>
        <i class='material-icons prefix'> lock_open</i> 
          <input id='pass' type='password' name='clave' class='validate' data-length="8" maxlength='8' value='<?php print($object->getClave()) ?>' required/>'
          <label for='password'>Contraseña</label><i class='fa fa-eye' id='password'></i>
        </div>
        <br>
       <button class='btn right' type='submit' name='action'>Entrar
          </button>
          <br>
          <br>
          <br>
        <div class='card-action center'>
          <a href='#'>¿Has olvidado tu contraseña?</a>
        </div>

       	</form>
    
      </div>
      </div>
      </div>
      