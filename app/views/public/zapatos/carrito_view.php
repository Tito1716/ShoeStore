<form method='post'>
<body>
<table class="centered">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
                            
          </tr>
        </thead>

        <tbody>
        <?php
        if($data){
            foreach($data as $row){
                print("
                <tr>
                    <td>$row[modelo]</td>
                    <td>$row[Precio]</td>
                    <td>$row[cantidad]</td>
                    <td>$row[subtotal]</td>
                </tr>
                ");
            }
        }else{
            print("
            <tr>
                <td>No hay productos en el carrito<td>
            </tr>
            ");
        } 
           ;  
        

        ?>
        </tbody>
      </table>
      <div class='row center-align'>
            <button id= 'terminar' type='submit' name='terminar'  class="waves-effect waves-light btn" ><i class='material-icons'>send</i>Realizar compra</button>
        </div>
        
      <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   <div class='row'>
      <div class='s14 m11 l6'></div>
   </div>
   
<body>

</form>
