<h2 class="center teal-text text-darken-3"> Modificar </h2><!--Agrega el titulo--> 
<form method='post'>
        <div class='row'>
        <div class="col s10 offset-s1">
        <div class="card-panel z-depth-5 green darken-4"><!--Color de la tarjeta y la sombra-->
        <div class="input-field col s6">
        <input  id="nombre" type="text" name="nombre" class="validate white-text" value='<?php print($object->getNombres()) ?>' required>
        <label class="active" for="nombre">Nombre</label>
      </div>
                  <div class="input-field col s12 l6">
                    <input  id="apellido" type="text" name="apellido" class="validate white-text" value='<?php print($object->getApellidos()) ?>' required>
                    <label class="active" for="apellido">Apellido</label>
                  </div>
                  <div class="input-field col s12 l6">
                    <input  id="correo" type="text" name="correo" class="validate white-text" value='<?php print($object->getCorreo()) ?>' required>
                    <label class="active" for="correo">Correo</label>
                  </div>
                  <div class='row center-align'>
                        <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
                        <button type='submit' name='Actulizar' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
                    </div>
                </div>
                </div>
                   
    </div>

    </form>