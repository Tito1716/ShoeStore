<h2 class="center teal-text text-darken-3"> Crear usuario </h2><!--Agrega el titulo--> 
<form method='post'>
        <div class='row'>
        <div class="col s10 offset-s1">
        <div class="card-panel z-depth-5 green darken-4"><!--Color de la tarjeta y la sombra-->
        <div class="input-field col s6">
        <input  id="usuario" type="text" name="usuario" class="validate" value='<?php print($usuario->getNombres()) ?>' required>
        <label class="active" for="usuario">Usuario</label>
      </div>
                  <div class="input-field col s12 l6">
                    <input  id="apellido" type="text" name="apellido" class="validate" value='<?php print($usuario->getApellidos()) ?>' required>
                    <label class="active" for="apellido">Apellido</label>
                  </div>
                  <div class="input-field col s12 l6">
                    <input id="contrasena" type="text" name="contrasena" class="validate" value='<?php print($usuario->getClave()) ?>' required>
                    <label class="active" for="contrasena">Contraseña</label>
                  </div>
                  <div class='input-field col s12 l6'>
                      <?php
                      Page::showSelect("Pregunta", "pregunta", $usuario->getPregunta(), $usuario->obtener_preguntas());
                      ?>
                  </div>
                  
                  <div class="input-field col s12 l6">
                    <input  id="respuesta" type="text" name="respuesta" class="validate" value='<?php print($usuario->getRespuesta()) ?>' required>
                    <label class="active" for="respuesta">Respuesta</label>
                  </div>
                  <div class='input-field col s12 l6'>
                      <?php
                      Page::showSelect("Tipo", "tipo", $usuario->getTipo(), $usuario->obtener_datos());
                      ?>
                  </div>
                  <div class='row center-align'>
                        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
                        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
                    </div>
                </div>
                </div>
                   
    </div>

    </form>
