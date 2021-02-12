<h2 class="center teal-text text-darken-3"> Modificar usuario </h2><!--Agrega el titulo--> 
<form method='post' enctype='multipart/form-data'>
        <div class='row'>
        <div class="col s10 offset-s1">
        <div class="card-panel z-depth-5 green darken-4"><!--Color de la tarjeta y la sombra-->
        <div class="input-field col s6">
        <input  id="Nombre" type="text" name="Nombre" class="validate" value='<?php print($prove->getNombres()) ?>' required>
        <label class="active" for="usuario">Nombre</label>
      </div>
                  <div class="input-field col s12 l6">
                    <input  id="direccion" type="text" name="direccion" class="validate" value='<?php print($prove->getDireccion()) ?>' required>
                    <label class="active" for="direccion">Direccion</label>
                  </div>
                  <div class="input-field col s12 l6">
                    <input id="telefono" type="text" name="telefono" class="validate" value='<?php print($prove->getTelefonos()) ?>' required>
                    <label class="active" for="telefono">Telefono</label>
                  </div>
                  
                  <div class='row center-align'>
                  <a href='proveedores.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
                  <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
                   </div>
                </div>
                </div>
                   
    </div>

    </form>