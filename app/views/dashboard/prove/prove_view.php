<div class="row">
    <h2 class="center teal-text text-darken-3"> Control de prove</h2><!--Agrega el titulo-->
    <div class="s14 m11 l6"></div><!--Agrega el espacio-->
  </div>
  <!--Agrega la tarjeta de busqueda-->
<div class="row">
   
   <div class="s8 m11 l6"><!--Agrega un espacio-->
 </div>
 <div class="row">
   <div class="s8 m11 l6"></div>
 </div>
<form>
 <div class="row">
   <div class="col s8 offset-s2"><!--Tamaño de la tarjeta-->
     <div class="card-panel z-depth-5 green darken-4"><!--Color de la tarjeta y la sombra-->
       <span class="center card-title lime-text text-lighten-4">Buscar</span><!--Titulo de la tarjeta-->
       <div class='row'>   
       <form method='post'>
           <div class='input-field col s12 m4'>
               <i class='material-icons prefix'>search</i>
               <input id='buscar' type='text' name='busqueda'/>
               <label for='buscar'>Buscador</label>
           </div>
           <div class='input-field center-align col s12 m4'>
               <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>check_circle</i></button>
           </div>
       </form>
       <div class='input-field center-align col s12 m4'>
           <a href='crear_desarrolladora.php' class='btn waves-effect indigo tooltipped' data-tooltip='Agregar desarrolladora'><i class='material-icons'>add_circle</i></a>
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
                  <th>Direccion</th>
                  <th>telefono</th>
                  
                </tr>
              </thead>

              <tbody>
              <?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[Nombre]</td>
			<td>$row[Direccion]</td>
			<td>$row[telefono]</td>
			<td>
				<a href='update.php?id=$row[Id_prooveedor]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[Id_prooveedor]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>

              </tbody>

            </table>
          </form>

    </div>
  </div>