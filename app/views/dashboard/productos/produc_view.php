<div class="row">
    <h2 class="center teal-text text-darken-3"> Control de productos</h2><!--Agrega el titulo-->
    <div class="s14 m11 l6"></div><!--Agrega el espacio-->
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
               <a class='dropdown-button btn tooltipped' data-tooltip='presione para ver Reportes' href='#' data-activates='dropdown1'><i class="material-icons">graphic_eq</i>Reportes</a>
                     
               <!-- Dropdown Structure -->
               <ul id='dropdown1' class='dropdown-content'>
                 <li class='tooltipped' data-tooltip='Reporte por categoria hombres' ><a href="../../app/reportes/reporte_hombre.php"><i class="material-icons">graphic_eq</i>Hombres</a></li>
                 <li class="divider"></li>
                 <li class='tooltipped' data-tooltip='Reporte por categoria mujeres'><a href="../../app/reportes/reporte_mujer.php"><i class="material-icons">graphic_eq</i>Mujer</a></li>
                 <li class="divider"></li>
                 <li class='tooltipped' data-tooltip='Reporte de productos'><a href="../../app/reportes/reporte_producto.php"><i class="material-icons">graphic_eq</i>Producto</a></li>
                 </ul>
                  <!-- Dropdown Trigger -->
                  <a class='dropdown-button btn tooltipped' data-tooltip='presione para ver Gráficos' href='#' data-activates='dropdown2'><i class="material-icons">assignment</i>Gráficos</a>
                     
               <!-- Dropdown Structure -->
               <ul id='dropdown2' class='dropdown-content'>
                 <li class='tooltipped' data-tooltip='Gráfico por categoria hombres'><a href="../grafico/grafico.php"><i class="material-icons">assignment</i>Zapatos hombres</a></li>
                 <li class="divider"></li>
                 <li class='tooltipped' data-tooltip='Gráfico por categoria mujeres'><a href="../grafico/grafico1.php"><i class="material-icons">assignment</i>Zapatos mujeres</a></li>
                 <li class="divider"></li>
                 <li class='tooltipped' data-tooltip='Grafico 5 productos más vendido'><a href="../grafico/grafico2.php"><i class="material-icons">assignment</i>Productos</a></li>
                 <li class="divider"></li>
                 <li class='tooltipped' data-tooltip='Grafico 5 productos más vendido'><a href="../grafico/grafico3.php"><i class="material-icons">assignment</i>Productos asc</a></li>
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
                             <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='Buscar por modelo'><i class='material-icons'>check_circle</i></button>
                         </div>  
                   </div>
                   
                   <div class="row">
                     <div class="s8 m11 l6"></div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           
</form>
 <div class="row"><!--Agrega el espacio de la tabla-->
    <div class="col s8 offset-s2"><!--Agrega la ubicacion de la tabla-->
     <div class="card-panel green darken-4 z-depth-5"><!--Agrega la sombra-->
     <h6 class="center-align lime-text text-lighten-4 ">Empleados</h6><!--Agrega el texto en la tarjeta -->
     <a id="Agregar" name="Agregar" class="btn-floating btn-large waves-effect modal-trigger waves-light #9F9F9F right " href="create.php">
       <i class="material-icons ">add</i><!--Agrega usuarios por el modal-->
     </a>
          <form><!--Agrega la tabla-->
            <table class="responsive-table lime-text text-lighten-4">
              <thead><!--Agrega el contenido de la tabla-->
                <tr>
                <th>IMAGEN</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Proveedor</th>
                <th>Tipo</th>
                <th>Talla</th>
                <th>Descripcion</th>
                </tr>
              </thead>

              <tbody>
              <?php
	
	foreach($data as $row){
		print("
		<tr>
			<td><img src='../../web/img/dashboard/$row[imagen]' class='materialboxed' width='100' height='100'></td>
            <td>$row[Marca]</td>
            <td>$row[modelo]</td>
            <td>$row[Cantidad]</td>
            <td>$row[Precio]</td>
            <td>$row[Id_proveedor]</td>
            <td>$row[tipo_producto_p]</td>
      <td>$row[talla]</td>
      <td>$row[descripcion]</td>
			<td>
				<a href='update.php?id=$row[Id_producto]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[Id_producto]' class='red-text'><i class='material-icons'>delete</i></a>
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