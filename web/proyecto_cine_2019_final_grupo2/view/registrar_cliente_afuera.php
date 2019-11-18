<?php 

 ?>
<!-- cuerpo de registrar_cliente-->
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
            <h2 class="center grey-text text-darken-3"><i class="medium material-icons">account_circle</i> 
              <!--si el atributo usuario->idusuario es diferente de nulo muestra el nombre-->
              <?php echo $cliente->idcliente != null ? 'Editar '.$cliente->nombre : 'Registrar Cliente'; ?>
            </h2>

            <!-- formulario -->
            <div class="row">
              <form class="col s12" action="?c=Cliente&a=Guardarcli" method="post" enctype="multipart/form-data">
                <div class="row">

                  <input type="hidden" name="txtidcliente" value="<?php echo $cliente->idcliente; ?>" />

                  <div class="input-field col s6">
                    <input id="txtNombre" type="text" class="validate" name="txtNombre" value="<?php echo $cliente->nombre; ?>"  required>
                    <label for="txtNombre">Nombre</label>
                  </div>
                  <div class="input-field col s6">
</i>
                    <input id="txtApellido" type="text" class="validate" name="txtApellido" value="<?php echo $cliente->apellido; ?>"  required>
                    <label for="txtApellido">Apellido</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="txtEmail" type="email" class="validate" name="txtEmail" value="<?php echo $cliente->email; ?>"  required>
                    <label for="txtEmail">Email</label>
                  </div>

                  <div class="input-field col s6">
                    <input id="txtClave" type="password" class="validate" name="txtClave" value="<?php echo $cliente->clave; ?>"  required>
                    <label for="txtClave">Clave</label>
                  </div>

                  <div class="input-field col s6">

                    <input id="txtidentificacion" type="text" class="validate" name="txtidentificacion" value="<?php echo $cliente->identificacion; ?>"  required>
                    <label for="txtidentificacion">Identificacion </label>
                  </div>

                  <div class="input-field col s6">

                    <input id="txttarjeta" type="text" class="validate" name="txttarjeta" value="<?php echo $cliente->tarjeta; ?>" required>
                    <label for="txttarjeta">Tarjeta</label>
                  </div>

                  <div class="input-field col s6">
                  <input id="txttarjetavencimieto" type="date" class="validate" name="txttarjetavencimieto" value="<?php echo $cliente->fechavencimientotarjeta; ?>" required>
                  <label for="txttarjetavencimieto">Fecha vencimiento tarjeta</label>
                  </div>


                  <div class="input-field col s12 center">
                  <button type="submit" class="waves-effect waves-light btn grey darken-2"><i class="material-icons right">send</i>Guardar</button>
                  </div>

                </div>
              </form>
            </div>

        </div>

      </div>

    </div>
    <br><br>
  </div>
