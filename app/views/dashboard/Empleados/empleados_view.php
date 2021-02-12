</div>
  <!--Agrega la tarjeta de busqueda-->
<div class="row">
   
   <div class="s8 m11 l6"><!--Agrega un espacio-->
 </div>
 <div class="row">
   <div class="s8 m11 l6"></div>
 </div>
 <form method="post">
 <div class="row">
                   <!-- Dropdown Trigger -->
               <a class='dropdown-button btn tooltipped' data-tooltip='presione para ver Grafico' href='#' data-activates='dropdown1'><i class="material-icons">graphic_eq</i>Grafico</a>   
               <!-- Dropdown Structure -->
               <ul id='dropdown1' class='dropdown-content'>
                 <li class='tooltipped' data-tooltip='Reporte por categoria hombres' ><a href="../grafico/grafico3.php"><i class="material-icons">graphic_eq</i>Hombres</a></li>>
              </ul>
              <a class='dropdown-button btn tooltipped' data-tooltip='presione para ver Reportes' href='#' data-activates='dropdown2'><i class="material-icons">graphic_eq</i>Reportes</a>
                     
               <!-- Dropdown Structure -->
               <ul id='dropdown2' class='dropdown-content'>
                
                 <li class='tooltipped' data-tooltip='Reporte de trabajadores'><a href="../../app/reportes/reporte_trabajadores.php" target="_blank"><i class="material-icons">graphic_eq</i>Trabajadores</a></li>
                
                 </ul>
    <div class="col s5 offset-s2"><!--Tamaño de la tarjeta-->
    <div class=" "><!--Color de la tarjeta y la sombra-->
      <span class="center card-title grey-text lighten-3">Buscar</span><!--Titulo de la tarjeta-->
      <div class="input-field offset-s5"><!--Agrega la tarjeta de la busqueda-->
      <i class='material-icons prefix'>search</i>
      <input id='buscar' type='text' name='busqueda'/>
      <label for='buscar'>Buscador</label>
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
 </form method="post">
    <div class="row"><!--Agrega el espacio de la tabla-->
      <div class="col s8 offset-s2"><!--Agrega la ubicacion de la tabla-->
        <div class="card-panel green darken-4 z-depth-5"><!--Agrega la sombra-->
        <a id="Agregar" name="Agregar" class="btn-floating btn-large waves-effect modal-trigger waves-light #9F9F9F right" href="create.php">
          <i class="material-icons">add</i><!--Agrega usuarios por el modal-->
        </a>
          <span class="center card-title lime-text text-lighten-4">Empleados</span><!--Agrega el texto en la tarjeta -->
          <form><!--Agrega la tabla-->
          
            <table class="responsive-table lime-text text-lighten-4">
              <thead><!--Agrega el contenido de la tabla-->
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Tipo</th>
                  
                </tr>
              </thead>

              <tbody>
              <?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[Usuario]</td>
			<td>$row[Apellido]</td>
			<td>$row[Tipo_usuario]</td>
			<td>
				<a href='update.php?id=$row[Id_usuario]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[Id_usuario]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>

              </tbody>

            </table>
          </form>
        </div><!--Agrega los botones-->
        <div id="modal1" class="modal bottom-sheet"><!--Aparece le modal-->
          <div class="modal-content"><!--Todos los datos del modal-->
            <h4 class="">Datos</h4>
            <div class="row"><!--Agregar las datos del modal-->
              <div class="input-field col s6">
                <input id="usuario" type="text" name="usuario"class="validate" value='<?php print($usuario->getNombres()) ?>' required>
                <label class="active" for="usuario">Nombre</label>
              </div>
              <div class="input-field col s6">
                <input  id="apellido" type="text" name="apellido" class="validate" value='<?php print($usuario->getApellidos()) ?>' required>
                <label class="active" for="apellido">Apellido</label>
              </div>
              <div class="input-field col s6">
                <input id="contrasena" type="text" name="contrasena" class="validate" value='<?php print($usuario->getClave()) ?>' required>
                <label class="active" for="contrasena">Contraseña</label>
              </div>
              <div class="input-field col s6">
                <input  id="pregunta" type="text" name="pregunta"class="validate" value='<?php print($usuario->getPregunta()) ?>' required>
                <label class="active" for="pregunta">Pregunta</label>
              </div>
              <div class="input-field col s6">
                <input  id="respuesta" type="text" name="respuesta" class="validate" value='<?php print($usuario->getRespuesta()) ?>' required>
                <label class="active" for="respuesta">Respuesta</label>
              </div>
              
              <div class="input-field col s6">
                <input  id="Tipo" type="text" name="Tipo" class="validate" value='<?php print($usuario->getTipo()) ?>' required>
                <label class="active" for="Tipo">Tipo</label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i>Guardar</button>
          </div>
        </div>

      </div>
    </div>
  </div>