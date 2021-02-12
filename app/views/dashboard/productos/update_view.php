<h2 class="center teal-text text-darken-3"> Modificar productos</h2><!--Agrega el titulo--> 
<form method='post' enctype='multipart/form-data'   >
        <div class='row'>
        <div class="col s10 offset-s1">
        <div class="card-panel z-depth-5 green darken-4"><!--Color de la tarjeta y la sombra-->
        <div class="input-field col s6">
        <input  id="Marca" type="text" name="Marca" class="validate" value='<?php print($produ->getMarca()) ?>' required>
        <label class="active" for="Marca">Marca</label>
      </div>
                  <div class="input-field col s12 l6">
                    <input  id="Cantidad" type="text" name="Cantidad" class="validate" value='<?php print($produ->getCantidad()) ?>' required>
                    <label class="active" for="Cantidad">Cantidad</label>
                  </div>
                  <div class="input-field col s12 l6">
                    <input  id="Precio" type="text" name="Precio" class="validate" value='<?php print($produ->getPrecio()) ?>' required>
                    <label class="active" for="Precio">Precio</label>
                  </div>
                  <div class='input-field col s12 l6'>
                      <?php
                      Page::showSelect("Proveedor", "prove", $produ->getId_pro(), $produ->obtener_prove());
                      ?>
                  </div>
                  <div class='input-field col s12 l6'>
                      <?php
                      Page::showSelect("Tipo", "tipo", $produ->getId_pro(), $produ->obtener_tipo());
                      ?>
                  </div>
                  <div class="input-field col s12 l6">
                    <input  id="Talla" type="text" name="Talla" class="validate" value='<?php print($produ->getTalla()) ?>' required>
                    <label class="active" for="Talla">Talla</label>
                  </div>
                  <div class='file-field input-field col s12 l6'>
                <div class='btn waves-effect'>
                    <span><i class='material-icons'>image</i></span>
                    <input type='file' name='archivo' required/>
                </div>
                <div class='file-path-wrapper'>
                    <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
                </div>
                </div>
                <div class="input-field col s12 l6">
                    <input  id="Modelo" type="text" name="Modelo" class="validate" value='<?php print($produ->getModelo()) ?>' required>
                    <label class="active" for="Modelo">Modelo</label>
                  </div>
                  <div class='input-field col s12 m6'>
                  <input id='descripcion' type='text' name='descripcion' class='validate' value='<?php print($produ->getDescripcion()) ?>' required/>
                  <label for='descripcion'>Descripción</label>
              </div>
                  <div class='row center-align'>
                  <a href='Empleados_Admin.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
                  <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
              </div>
                </div>
                </div>
                   
    </div>

    </form>
