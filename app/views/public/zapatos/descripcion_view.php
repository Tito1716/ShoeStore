 <div class='container'>
    <div class='row'>
    <div class='col s12'>
    <form method='post' enctype='multipart/form-data'>
    <?php
    print("
    <h3 class='header'>".$categorias->getMarca()."</h3>
    <h3 class='header'>".$categorias->getDescripcion()."</h3>
    <div class='card horizontal'>
        <div class='card-image'>
            <img src='../web/img/dashboard/".$categorias->getImagen()."'>
        </div>
        <div class='card-stacked'>
            <div class='card-content'>
                <p>".$categorias->getModelo()."</p>
                <p><b>Precio (US$) ".$categorias->getPrecio()."</b></p>
            </div>
            
                <div class='card-action'>
              
                    <div class='row center'>
                        <div class='input-field col s12 m6'>
                            <i class='material-icons prefix'>list</i>
                            <input id='cantidad' type='number' name='cantidad' min='1' class='validate'>
                            <label for='cantidad'>Cantidad</label>
                        </div>
                        
                        <div class='row'>
                        <button id='agregar' type='submit' name='agregar' class='btn waves-effect blue'><i class='material-icons'>shop</i></button>
                    </div>
                    
                        <div class='row'>
                        <form method='post' enctype='multipart/form-data'>
                        <div class='col s12 push-s4'>
                            <div class='input-field col s8'><!-- se le da el tamaño al input -->
                            <input id='email' type='email' class='validate'>
                            <label for='email' data-error='wrong' data-success='right'>Correo</label>
                        </div>
                        
                        <div class='col s12 pull-1'>
                            <div class='input-field col s8'> <!-- se le da tamaño al text area -->
                            <textarea id='textarea1' class='materialize-textarea'></textarea>
                            <label for='textarea1'>Opiniones</label>
                        </div>
                        </form>
                    </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        
    ");
    ?>
    </form>  
 </div>
   </div>
    </div>
     