<!-- cuerpo de actualizar_usuario -->
<div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-2"><i class="medium material-icons">account_circle</i> 
              <!--si el atributo objeto->id es diferente de nulo muestra el nombre-->
              <?php echo 'Editar '.$usuario->nombre;?>
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Usuario&a=ActualizarUsuario" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtIdusuario" value="<?php echo $usuario->idusuario; ?>" />

                  <div class="input-field col s6">
                    <input id="txtNombre" type="text" class="validate" name="txtNombre" value="<?php echo $usuario->nombre; ?>"  required>
                    <label for="txtNombre">Nombre</label>
                  </div>
                  <div class="input-field col s6">
</i>
                    <input id="txtApellido" type="text" class="validate" name="txtApellido" value="<?php echo $usuario->apellido; ?>"  required>
                    <label for="txtApellido">Apellido</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="txtEmail" type="email" class="validate" name="txtEmail" value="<?php echo $usuario->email; ?>"  required>
                    <label for="txtEmail">Email</label>
                  </div>
                 
                  
                  <div class="input-field col s12 center">
                  <button type="submit" class="waves-effect waves-light btn grey"><i class="material-icons right">send</i>Guardar</button>
                  </div>

                </div>
              </form>
            </div>

        </div>

      </div>

    </div>
    <br><br>
  </div>
